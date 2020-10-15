<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user admin
        User::create([
            'nrm' => 0,
            'password' => bcrypt('123123'),
            'role' => 1
        ]);

        //fakultas
        Fakultas::create([
            'nama_fakultas' => 'FMIPA',
            'tanggal_awal_photoshoot' => '2020-10-15',
            'tanggal_akhir_photoshoot' => '2020-10-20',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FT',
            'tanggal_awal_photoshoot' => '2020-10-20',
            'tanggal_akhir_photoshoot' => '2020-10-25',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FIO',
            'tanggal_awal_photoshoot' => '2020-10-25',
            'tanggal_akhir_photoshoot' => '2020-10-30',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FIS',
            'tanggal_awal_photoshoot' => '2020-10-30',
            'tanggal_akhir_photoshoot' => '2020-11-5',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FBS',
            'tanggal_awal_photoshoot' => '2020-11-5',
            'tanggal_akhir_photoshoot' => '2020-11-10',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'Psikologi',
            'tanggal_awal_photoshoot' => '2020-11-10',
            'tanggal_akhir_photoshoot' => '2020-11-15',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FIP',
            'tanggal_awal_photoshoot' => '2020-11-10',
            'tanggal_akhir_photoshoot' => '2020-11-15',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FE',
            'tanggal_awal_photoshoot' => '2020-11-10',
            'tanggal_akhir_photoshoot' => '2020-11-15',
        ]);

        //Slot
        Slot::create([
            'tanggal' => '2020-10-14',
            'kapasitas' => 6
        ]);
    }
}
