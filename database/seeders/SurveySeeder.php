<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->truncate();

        foreach (range(1, 3) as $value)
        {
            $answers = [];

            foreach (range(1, 32) as $index)
            {
                $answers[] = ['yes', 'no'][mt_rand(0, 1)];
            }

            Survey::create([
                'uuid' => Str::uuid(),
                'name' => ['John', 'William', 'Tim', 'Dirk'][mt_rand(0, 3)],
                'age' => mt_rand(20, 60),
                'gender' => ['male', 'female'][mt_rand(0, 1)],
                'answers' => json_encode($answers),
            ]);
        }

    }
}
