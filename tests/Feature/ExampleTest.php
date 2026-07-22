<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
<<<<<<< HEAD

    public function test_check_updates_endpoint_returns_latest_timestamp(): void
    {
        $response = $this->getJson('/check-updates');

        $response->assertStatus(200)
            ->assertJsonStructure(['updated_at', 'changed']);
    }
=======
>>>>>>> origin/main
}
