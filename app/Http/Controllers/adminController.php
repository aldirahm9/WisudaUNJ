<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Fakultas;
use App\Models\Slot;

class adminController extends Controller
{
    public function dashboard()
    {
        $slot = Slot::all();
        $fakultas = Fakultas::all();
        $pendaftaran = Pendaftaran::all();
        return view('dashboard', ['pendaftaran' => $pendaftaran, 'fakultas' => $fakultas, 'slot' => $slot]);
    }
}
