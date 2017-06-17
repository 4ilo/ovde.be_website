<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class adminTest extends TestCase
{
    
    use DatabaseMigrations;
    
    /** @test */
    public function unauthorised_users_without_an_acount_canot_see_the_dashboard()
    {
        $response = $this->get("dashboard");
        
        $response->assertRedirect("login");
    }
    
    
    /** @test */
    public function a_loged_in_user_can_see_the_dashboard()
    {
        // Given we have u user
        $user = factory("App\User")->make();
        
        // And we login
        $response = $this->actingAs($user)
                         ->get("dashboard");
        
        // We can see the dashboard
        $response->assertStatus(200)
                 ->assertSee("dashboard");
    }
    
    /** @test */
    public function a_user_can_login_and_see_the_dashboard()
    {
        // Given we have u user
        $user = User::create([
            "name" => "test",
            "email" => "test@test.be",
            "password" => bcrypt("test")
        ]);
        
        // And we submit a post to /login
        $response = $this->postJson("login", [
            "_token" => csrf_token(),
            "name" => $user->name,
            "password" => "test"
        ]);
        
        // We should be on the dashboard page
        $response->assertRedirect("dashboard")
                 ->assertSee("dashboard");
    }
    
    /** @test */
    public function a_user_with_false_credentials_should_be_redirected_back()
    {
        // Given we have u user
        $user = User::create([
            "name" => "test",
            "email" => "test@test.be",
            "password" => bcrypt("test")
        ]);
        
        // And we send false credentials
        $response = $this->postJson("login", [
            "_token" => csrf_token(),
            "name" => "testfalse",
            "password" => "test"
        ]);
        
        // We should see the login page
        $response->assertRedirect("login");
    }
}
