<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $station = Station::inRandomOrder()->first();

        $status = ['approved', 'pending', 'for verification'];
        $civilStatus = ['single', 'married', 'divorced', 'widowed'];
        $type = ['robbery', 'carnapping', 'assault'];

        $createdAt = $this->faker->dateTimeBetween('-20days');
        return [
            'uuid' => $this->faker->uuid,
            'control_no' => 'B' . mt_rand(1000, 9999) . mt_rand(1000, 9999) . mt_rand(1000, 9999),
            'station_id' => $station->id,
            'type' => $type[mt_rand(0, 2)],
            'civil_status' => $civilStatus[mt_rand(0, 2)],
            'status' => $status[mt_rand(0, 2)],
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->word,
            'last_name' => $this->faker->lastName,
            'mobile' => $this->faker->phoneNumber,
            'suffix' => $this->faker->streetSuffix,
            'email' => $this->faker->email,
            'present_address' => $this->faker->address,
            'permanent_address' => $this->faker->address,
            'citizenship' => ['filipino', 'american', 'british'][mt_rand(0, 2)],
            'date_of_birth' => $this->faker->dateTimeBetween('-40years')->format('Y-m-d'),
            'gender' => ['male', 'female'][mt_rand(0 , 1)],
            'synopsis' => $this->faker->text,
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ];
    }
}
