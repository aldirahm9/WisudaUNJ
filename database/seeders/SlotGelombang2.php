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
        $date = array();
        $currentDay = 21;
        $weekend = ['Sun', 'Sat'];
        $kapasitas = 150;
        for ($x = $currentDay; $x < $currentDay + 30; $x++) {
            if ( !in_array( date('D', mktime(0, 0, 0, 11+($x/30), $x%30)), $weekend) ) {
                $date[] = date('Y-m-d', mktime(0, 0, 0, 11+($x/30), $x%30));
            }
        }

        foreach ($date as $d) {
            Slot::create([
                'tanggal' => $d,
                'kapasitas' => $kapasitas,
                'gelombang' => 2
            ]);
        }
    }
}
