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
            'nama_fakultas' => 'FIP',
            'tanggal_awal_photoshoot' => '2020-10-21',
            'tanggal_akhir_photoshoot' => '2020-10-22',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FBS',
            'tanggal_awal_photoshoot' => '2020-10-23',
            'tanggal_akhir_photoshoot' => '2020-10-26',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FMIPA',
            'tanggal_awal_photoshoot' => '2020-10-27',
            'tanggal_akhir_photoshoot' => '2020-10-28',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FIS',
            'tanggal_awal_photoshoot' => '2020-10-28',
            'tanggal_akhir_photoshoot' => '2020-10-29',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FT',
            'tanggal_awal_photoshoot' => '2020-10-30',
            'tanggal_akhir_photoshoot' => '2020-11-2',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FIO',
            'tanggal_awal_photoshoot' => '2020-11-3',
            'tanggal_akhir_photoshoot' => '2020-11-3',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'FE',
            'tanggal_awal_photoshoot' => '2020-11-4',
            'tanggal_akhir_photoshoot' => '2020-11-4',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'Psikologi',
            'tanggal_awal_photoshoot' => '2020-11-5',
            'tanggal_akhir_photoshoot' => '2020-11-5',
        ]);
        Fakultas::create([
            'nama_fakultas' => 'Pascasarjana',
            'tanggal_awal_photoshoot' => '2020-11-6',
            'tanggal_akhir_photoshoot' => '2020-11-10',
        ]);

        $kapasitas = 150;
        //Slot
        Slot::create([
            'tanggal' => '2020-10-21',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-22',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-23',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-26',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-27',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-28',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-29',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-10-30',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-2',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-3',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-4',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-5',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-6',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-9',
            'kapasitas' => $kapasitas
        ]);
        Slot::create([
            'tanggal' => '2020-11-10',
            'kapasitas' => $kapasitas
        ]);
        // Slot::create([
        //     'tanggal' => '2020-11-11',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-12',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-13',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-16',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-17',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-18',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-19',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-20',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-23',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-24',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-25',
        //     'kapasitas' => $kapasitas
        // ]);
        // Slot::create([
        //     'tanggal' => '2020-11-26',
        //     'kapasitas' => $kapasitas
        // ]);
    }
}
