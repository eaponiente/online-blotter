<?php

namespace Tests\Feature\Client\Reports;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ReportFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_submit_report_success()
    {
        $response = $this->json('POST', route('report.store'), [
            'station_id' => 1,
            'type' => 'robbery',
            'civil_status' => 'single',
            'first_name' => 'Whats',
            'middle_name' => 'Up',
            'last_name' => 'Hoe',
            'suffix' => 'Sr',
            'email' => 'test@email.com',
            'mobile' => '+63123444123123',
            'permanent_address' => 'Toril',
            'present_address' => 'Mintal',
            'citizenship' => 'robbery',
            'gender' => 'male',
            'date_of_birth' => '1981-11-27',
            'who' => 'John Grisham',
            'where' => 'Toril',
            'when' => '2021-06-05 11:54',
            'synopsis' => 'synopsis',
            'filename' => UploadedFile::fake()->image('test.jpg')
        ]);

        $response->assertStatus(201);
    }

    public function test_submit_report_should_fail_validation()
    {
        $response = $this->json('POST', route('report.store'), [
            'station_id' => 1,
            'type' => 'robbery',
            'civil_status' => 'single',
            'last_name' => 'Hoe',
            'suffix' => 'Sr',
            'email' => 'test@email.com',
            'mobile' => '+63123444123123',
            'permanent_address' => 'Toril',
            'present_address' => 'Mintal',
            'citizenship' => 'robbery',
            'gender' => 'male',
            'date_of_birth' => '1981-11-27',
            'who' => 'John Grisham',
            'where' => 'Toril',
            'when' => '2021-06-05 11:54',
            'synopsis' => 'synopsis',
            'filename' => UploadedFile::fake()->image('test.jpg')
        ]);

        $response->assertStatus(422);
    }
}
