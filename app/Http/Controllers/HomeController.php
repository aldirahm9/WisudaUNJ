<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
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
        $pendaftaran = Pendaftaran::all();
        return view('home', ['pendaftaran' => $pendaftaran]);
    }

    public function pdf()
    {
        $pendaftaran = Auth::user()->pendaftaran;
        view()->share('pendaftaran',$pendaftaran);
        $pdf = PDF::loadView('pdf.bukti_pendaftaran',$pendaftaran);
        $nama = str_replace(' ','_',$pendaftaran->nama_mahasiswa);
        return $pdf->download($nama . '_' . Auth::user()->nrm . '_WisudaDigitalUNJ.pdf');
    }
}
