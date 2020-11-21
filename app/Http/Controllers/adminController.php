<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Fakultas;
use App\Models\Slot;
use APP\Models\User;

class adminController extends Controller
{
    public function dashboard()
    {
        $slot = Slot::where('gelombang',config('app.gelombang'));
        $fakultas = Fakultas::all();
        $pendaftaran = Pendaftaran::all();
        return view('dashboard', ['pendaftaran' => $pendaftaran, 'fakultas' => $fakultas, 'slot' => $slot]);
    }

    public function delete_pendaftar($nrm)
    {
        $user = User::where('nrm', $nrm)->first();

        if (!$user) {
            abort(404);
        }

        $pendaftar = Pendaftaran::where('user_id', $user->id)->first();
        $pendaftar->delete();

        $user->delete();

        return response()->json([
            'status' => 'Deleted',
            'msg' => 'Berhasil menghapus pendaftaran dengan nama '.$pendaftar->nama_mahasiswa
        ], 200);
    }
}
