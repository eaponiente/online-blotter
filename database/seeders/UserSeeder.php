<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        foreach (range(1, 2) as $val)
        {
            $station = Station::inRandomOrder()->first();

            User::factory()->create([
                'username' => 'admin_' . $val,
                'station_id' => $station->id
            ]);
        }
    }
}
