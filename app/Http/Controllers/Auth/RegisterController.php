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
        $invalidDates = [];
        $fakultas = Fakultas::all();
        $slot = Slot::all();
        foreach($slot as $key=>$item) {
            if($item->pendaftaran->count() == $item->kapasitas) {
                $invalidDates[$key] = $item;
            }
        }
        return view('auth.register',['fakultas' => $fakultas,'invalidDates'=>$invalidDates]);
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
        Pendaftaran::create([
            'user_id' => $user->id,
            'fakultas_id' => $data['fakultas'],
            'nama_mahasiswa' => $data['nama'],
            'slot_id' => $slot->id,
            'kode_unik' => 'unik sih katanya'
        ]);
        return $user;
    }
}
