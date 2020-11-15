<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Seeder;

class SlotGelombang2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kapasitas = 150;
        Slot::create([
            'tanggal' => '2020-11-23',
            'kapasitas' => $kapasitas,
            'gelombang' => 2
        ]);
        Slot::create([
            'tanggal' => '2020-11-24',
            'kapasitas' => $kapasitas,
            'gelombang' => 2
        ]);
        Slot::create([
            'tanggal' => '2020-11-25',
            'kapasitas' => $kapasitas,
            'gelombang' => 2
        ]);
        Slot::create([
            'tanggal' => '2020-11-26',
            'kapasitas' => $kapasitas,
            'gelombang' => 2
        ]);
        Slot::create([
            'tanggal' => '2020-11-27',
            'kapasitas' => $kapasitas,
            'gelombang' => 2
        ]);
    }
}
