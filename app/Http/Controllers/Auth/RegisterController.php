<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\Pendaftaran;
use App\Models\Slot;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $validDates = [];
        $fakultas = Fakultas::all();
        // $slot = Slot::all();
        $slot = Slot::where('gelombang',config('app.gelombang'))->get();
        foreach($slot as $key=>$item) {
            if($item->pendaftaran->count() < $item->kapasitas) {
                $validDates[$key] = $item->tanggal;
            }
        }
        
        return view('auth.register',['fakultas' => $fakultas,'validDates'=>$validDates]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nrm' => ['required', 'string', 'max:255', 'unique:users'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $tanggal = Carbon::createFromFormat('d/m/Y',$data['tanggal_kedatangan']);
        $slot = Slot::where('tanggal',Carbon::parse($tanggal)->format('Y-m-d'))->first();

        $user = User::create([
            'nrm' => $data['nrm'],
            'password' => Hash::make($data['password']),
            'role' => 0,
        ]);
        // $hashids = new Hashids('',6,'abcdefghijklmnopqrstuvwxyz0123456789');
        $pendaftaran = Pendaftaran::create([
            'user_id' => $user->id,
            'fakultas_id' => $data['fakultas'],
            'nama_mahasiswa' => $data['nama'],
            'slot_id' => $slot->id,
            'jam' => $data['jam']
        ]);

        $pendaftaran->kode_unik = $this->generate_referral(6);
        $pendaftaran->save();
        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $tanggal = Carbon::createFromFormat('d/m/Y',$request->tanggal_kedatangan);
        $slot = Slot::where('tanggal',Carbon::parse($tanggal)->format('Y-m-d'))->first();
        // validate if tanggal tidak sama
        // $fakultas = Fakultas::find($request->fakultas);
        //declare var
        // $start_date = $fakultas->tanggal_awal_photoshoot;
        // $end_date = $fakultas->tanggal_akhir_photoshoot;
        // $tanggal = Carbon::createFromFormat('d/m/Y',$request->tanggal_kedatangan);
        // $date_from_user = Carbon::parse($tanggal)->format('Y-m-d');
        // Convert to timestamp
        // $start_ts = strtotime($start_date);
        // $end_ts = strtotime($end_date);
        // $user_ts = strtotime($date_from_user);
        //kondisi tanggal user diantara start & end

        if($slot == null) {
        // if($slot == null || ($user_ts <= $start_ts) || ($user_ts >= $end_ts)) {
            Session::flash('failed', 'Tanggal Tidak Sesuai! Silahkan Pilih Tanggal Lain!');
            return redirect('register');
        }
        if(Pendaftaran::where('slot_id',$slot->id)->count() >= $slot->kapasitas) {
            Session::flash('failed', 'Tanggal Penuh! Silahkan Pilih Tanggal Lain!');
            return redirect('register');
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath())->with('success', 'Selamat Anda Berhasil Melakukan Pendaftaran!');
    }

    public function generate_referral($length) {
        $str_result = 'abcdefghijklmnopqrstuvwxyz1234567890';
        return substr(str_shuffle($str_result), 0, $length);
    }
}
