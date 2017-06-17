<?php

namespace Tests\Feature;

use App\Tag;
use App\Solution;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SolutionsTest extends TestCase
{
    use DatabaseMigrations;
    
    protected $user;
    
    public function setUp()
    {
        parent::setUp();
        $this->user = factory("App\User")->make();
    }
    
    /** @test */
    public function a_user_can_add_a_solution()
    {
        // Given we have a tag and are loged in
        $tag = factory("App\Tag")->create();
        
        // And we create a solution
        $this->actingAs($this->user)
             ->json("post", "/solution", [
                 "titel" => "test titel",
                 "body" => "test body",
                 "tag_id" => $tag->id
             ]);
        
        // We should see it in the database
        $this->assertEquals(Solution::all()->count(), 1);
    }
    
    /** @test */
    public function a_user_can_edit_a_solution()
    {
        // Given we have a solution and a associated tag
        $solution = factory("App\Solution")->create();
        
        // And we edit the solution
        $this->actingAs($this->user)
             ->json("patch", "/solution/" . $solution->id, [
                 "titel" => "changed title",
                 "body" => $solution->body,
                 "tag_id" => $solution->tag->id,
             ]);
        
        // We should see the change
        $this->assertEquals("changed title", Solution::all()->first()->titel);
    }
    
    /** @test */
    public function a_user_can_create_a_tag()
    {
        //Given we are signed in
        $response = $this->actingAs($this->user)
                         ->json("post", "tags", [
                             "name" => "test",
                             "color" => "green",
                         ]);
        
        $response->assertRedirect("tags");
        
        $this->get("/tags")->assertSee("test");
    }
    
    /** @test */
    public function a_tag_can_be_deleted()
    {
        // Given we have a tag
        $tag = factory("App\Tag")->create();
        
        // And we delete is
        $this->actingAs($this->user)->get("tag/". $tag->id ."/delete");
        
        // We should not see it in the database
        $this->assertEquals(Tag::all()->count(), 0);
    }
    
    /** @test */
    public function a_user_can_select_solutions_by_tag()
    {
        // Given we have multiple solutions
        $solution1 = factory("App\Solution")->create();
        $solution2 = factory("App\Solution")->create();
        
        // And we filter for 1 tag
        $response = $this->actingAs($this->user)
                         ->get("solution?sort=" . $solution1->tag->id);
        
        // We should see only one solution
        $response->assertSee($solution1->titel);
        $response->assertDontSee($solution2->titel);
    }
}
