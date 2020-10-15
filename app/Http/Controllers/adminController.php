<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Fakultas;

class adminController extends Controller
{
    public function dashboard()
    {
        $fakultas = Fakultas::all();
        $pendaftaran = Pendaftaran::all();
        return view('dashboard', ['pendaftaran' => $pendaftaran, 'fakultas' => $fakultas]);
    }
}
