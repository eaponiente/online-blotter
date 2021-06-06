<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangays')->truncate();

        foreach (range(1, 30) as $value)
        {
            $station = Station::inRandomOrder()->first();

            Barangay::factory()->create([
                'station_id' => $station->id
            ]);
        }
    }
}
