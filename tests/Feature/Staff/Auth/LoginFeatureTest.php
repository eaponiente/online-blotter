<?php

namespace Tests\Feature\Staff\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/');

        $response->assertStatus(200);
    }
}
