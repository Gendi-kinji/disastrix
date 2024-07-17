<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Emergency;
use App\Models\Responder;
use App\Models\Incident;

class EmergencyResponseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function emergency_report_page_render(): void
    {
        $response = $this->get('/incident/report');

        $response->assertStatus(200);
    }
    public function emergency_report(){
        $response = $this->post('/incident/add', [
            'incident_type' => 'Fire',
            'location' => 'Weston Hotel,Nairobi',
            'time_of_incident' => '2021-09-01 10:00:00',

        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('incident-view', absolute: true));
    }
    public function emergency_view(){

        $response = $this->get('/incident/view/3');

        $response->assertStatus(200);
    }
    public function incident_view(){
        $response = $this->get('/incidents/3');

        $response->assertStatus(200);
    }
    public function incident_index(){
        $response = $this->get('/incidents');

        $response->assertStatus(200);
    }
    public function incident_dispatch(){
        $response=$this->get('/incidents/3/dispatch');
        $response->assertStatus(200);
    }
    public function incident_send_responders(){
        $response=$this->post('/incidents/3/send',[
            'responders'=>[1,2]
        ]);
        $response->assertStatus(302);
    }

}
