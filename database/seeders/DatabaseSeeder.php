<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StationSeeder::class);
        $this->call(BarangaySeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(UserSeeder::class);
    }
}
