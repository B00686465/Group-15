<?php

namespace Tests\Feature;

use App/user;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateAnAccountTest extends TestCase
{
    /**
     * A basic test example.
     * Acceptance tests
     * @return void
     */
    public function test_can_create_an_account()
    {
        // able to get on the register page

        $user = factory(User::class)->create(['username' => 'johndoe']);
        // able to enter details

        // receive notification of account complete


    }
}
