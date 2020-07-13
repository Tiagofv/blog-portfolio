<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function a_guest_cant_create_a_post()
    {
        $post = factory('App\Post')->raw();
        $response = $this->post('post', $post);

        $response->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_create_a_post(){
        $user = factory('App\User')->create();
        $this->actingAs($user);
        $post = factory('App\Post')->raw(['author' => $user->id]);
        $this->post('post', $post)->assertRedirect('home');
    }
}
