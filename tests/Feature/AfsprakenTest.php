<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AfsprakenTest extends TestCase
{
    use DatabaseMigrations;
    
    /** @test */
    public function a_user_can_ad_a_afspraak_for_a_klant()
    {
        // Given we have a klant
        $klant = factory("App\Klant")->create();
        
        // And we create a afspraak
        $response = $this->post("klant/" . $klant->id . "/afspraak", [
            "datum" => Carbon::now()->format("d/m/Y"),
            "opmerkingen" => "test",
            "tijd" => "1"
        ]);
        
        // We should see it on the klant
        $response->assertRedirect();

        $this->assertEquals("1", $klant->afspraken->count());
    }
}
