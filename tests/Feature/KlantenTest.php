<?php

namespace Tests\Feature;

use App\Klant;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class KlantenTest extends TestCase
{
    use DatabaseMigrations;
    private $user;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->user = factory("App\User")->create();
        $this->actingAs($this->user);
    }
    
    /** @test */
    public function a_user_can_create_a_new_klant()
    {
        // And we create a new klant
        $response = $this->post("klant",[
            "naam" => "test klant",
            "adres" => "teststraat 100",
        ]);
        
        $response->assertRedirect("klant");
        
        // We should see it in the database
        $this->assertEquals(1,Klant::all()->count());
    }
    
    /** @test */
    public function a_user_can_delete_a_klant()
    {
        // Given we have a klant
        $klant = factory("App\Klant")->create();
        
        // And we delete the klant
        $this->delete("klant/". $klant->id);
        
        // We should not see it in the database
        $this->assertEquals(0, Klant::all()->count());
    }
    
    /** @test */
    public function a_user_can_update_a_klant()
    {
        // Given we have a klant
        $klant = factory("App\Klant")->create();
        
        // Als we update it
        $this->patch("klant/" . $klant->id, [
            "naam" => "new name",
            "adres" => $klant->adres,
        ]);
        
        // We should see it edited
        $this->get("klant/" . $klant->id)->assertSee("new name");
    }
}
