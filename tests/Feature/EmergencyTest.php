<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmergencyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/incident/add', [
            'incident_type' => 'Fire',
            'location' => 'Weston Hotel,Nairobi',
            'time_of_incident' => '2021-09-01 10:00:00',

        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('incident-view', absolute: true));
    }
    }

