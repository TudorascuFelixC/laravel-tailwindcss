<?php

namespace Tests\Feature;

use App\Models\VepostUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetOneUser()
    {
        // Arrange: Create a user
        $user = VepostUser::factory()->create();

        // Act: Make a GET request to your route
        $response = $this->getJson("/api/user/{$user->id}"); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJson([
                     'success' => true,
                     'data' => [
                         'id' => $user->id,
                         'username' => $user->username,
                         // ... other fields
                     ],
                 ]);
    }

    public function testGetOneUserNotFound()
    {
        // Act: Make a GET request to your route with a non-existent user ID
        $response = $this->getJson('/api/user/9999'); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(404)
                 ->assertJson([
                     'success' => false,
                     'message' => 'User not found',
                 ]);
    }

    public function testGetAllUsers()
    {
        // Arrange: Create multiple users
        VepostUser::factory()->count(3)->create();

        // Act: Make a GET request to fetch all users
        $response = $this->getJson('/api/users'); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJsonCount(3, 'data');
    }

    public function testGetAllUsersEmpty()
    {
        // Act: Make a GET request to fetch all users
        $response = $this->getJson('/api/users'); // Update with your actual route

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJson([
                     'success' => true,
                     'data' => [],
                 ]);
    }
}
