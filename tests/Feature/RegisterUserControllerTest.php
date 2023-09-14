<?php
// RegisterUserControllerTest.php

namespace Tests\Feature;

use App\Models\VepostUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterUserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test registering a new user.
     *
     * @return void
     */
    public function testRegister()
    {
        $data = [
            'username' => 'testuser',
            'password' => 'password',
            'password_confirmation' => 'password',
            'displayname' => 'Test User',
        ];

        $response = $this->post('/register', $data);
        $response->assertStatus(302);

        $this->assertDatabaseHas('vepost_user', [
            'username' => 'testuser',
            'displayname' => 'Test User',
        ]);

        $this->assertCredentials([
            'username' => 'testuser',
            'password' => 'password',
        ]);
    }

    /**
     * Test registering a user with an already existing username.
     *
     * @return void
     */
    public function testRegisterDuplicateUsername()
    {
        VepostUser::factory()->create(['username' => 'testuser']);

        $data = [
            'username' => 'testuser',
            'password' => 'password',
            'password_confirmation' => 'password',
            'displayname' => 'Test User',
        ];

        $response = $this->post('/register', $data);
        $response->assertSessionHasErrors('username');
    }
}
