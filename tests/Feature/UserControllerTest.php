<?php

namespace Tests\Feature;

use App\Models\VepostUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase; // This will ensure a fresh database for each test run

    public function testGetAllUsers()
    {
        // Arrange: Create 3 users in the database
        VepostUser::factory()->count(3)->create();

        // Act: Make a GET request to fetch all users
        $response = $this->getJson('/api/users'); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJsonCount(3, 'data');
    }

    public function testGetOneUser()
    {
        // Arrange: Create a user in the database
        $user = VepostUser::factory()->create();

        // Act: Make a GET request to fetch the user by ID
        $response = $this->getJson("/api/user/{$user->id}"); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJson([
                     'success' => true,
                     'data' => [
                         'id' => $user->id,
                         // Add other fields you want to check here
                     ]
                 ]);
    }

    public function testGetOneUserNotFound()
    {
        // Act: Make a GET request to fetch a user by a non-existing ID
        $response = $this->getJson('/api/user/9999'); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(404)
                 ->assertJson([
                     'success' => false,
                     'message' => 'User not found',
                 ]);
    }
}
