<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            "STA ANA Police Station (PS1)",
            "San Pedro Police Station (PS2)",
            "Talomo Police Station (PS3)",
            "Sasa Police Station (PS4)",
            "Buhangin Police Station (PS5)",
            "Bunawan Police Station (PS6)",
            "Paquibato Police Station (PS7)",
            "Toril Police Station (PS8)",
            "Tugbok Police Station (PS9)",
            "Calinan Police Station (PS10)",
            "Baguio Police Station (PS11)",
            "Marilog Police Station (PS12)",
            "Mandug Police Station (PS13)",
            "Mandug Police Station (PS15)",
            "Baliok Police Station (PS17)"
        ];
        DB::table('stations')->truncate();

        foreach ($stations as $station)
        {
            Station::factory()->create([
                'name' => $station
            ]);
        }
    }
}
