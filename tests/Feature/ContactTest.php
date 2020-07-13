<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_guest_can_create_a_contact(){
        $contact = factory('App\Contact')->raw();
        $this->post('contact', $contact)->assertRedirect('');
    }

    /** @test */
    public function requires_email(){
        $contact = factory('App\Contact')->raw(['email' => 'randomstring']);
        $this->post('contact', $contact)->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function a_guest_cant_delete_a_contact(){
        $contact = factory('App\Contact')->create();
        $this->delete('contact/'.$contact->id)->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_see_contacts(){
        $user = factory('App\User')->create();
        $this->actingAs($user);
        $contacts = factory('App\Contact', 10)->create();
        $this->withoutExceptionHandling();
        $this->get('contact')->assertViewHas('contacts');
    }
}
