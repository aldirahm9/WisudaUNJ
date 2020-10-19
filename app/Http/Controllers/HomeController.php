<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->isAdmin())
        return redirect('/admin');
        $slot = Slot::all();
        $pendaftaran = Pendaftaran::all();
        $invalidDates = [];
        foreach($slot as $key=>$item) {
            if($item->pendaftaran->count() == $item->kapasitas) {
                $invalidDates[$key] = $item->tanggal;
            }
        }
        return view('home', ['pendaftaran' => $pendaftaran,'invalidDates'=>$invalidDates]);
    }

    public function pdf()
    {
        $pendaftaran = Auth::user()->pendaftaran;
        view()->share('pendaftaran',$pendaftaran);
        $pdf = PDF::loadView('pdf.bukti_pendaftaran',$pendaftaran);
        $nama = str_replace(' ','_',$pendaftaran->nama_mahasiswa);
        return $pdf->download($nama . '_' . Auth::user()->nrm . '_WisudaDigitalUNJ.pdf');
    }

    public function ubahTanggal(Request $request)
    {
        $tanggal = Carbon::createFromFormat('d/m/Y',$request->tanggal_kedatangan);
        $slot = Slot::where('tanggal',Carbon::parse($tanggal)->format('Y-m-d'))->first();


        $pendaftaran = Auth::user()->pendaftaran;
        $pendaftaran->slot_id = $slot->id;
        $pendaftaran->save();
        return redirect('home');
    }

    public function ubahJam(Request $request)
    {
        $pendaftaran = Auth::user()->pendaftaran;
        $pendaftaran->jam = $request->jam;
        $pendaftaran->save();
        return redirect('home');
    }
}
