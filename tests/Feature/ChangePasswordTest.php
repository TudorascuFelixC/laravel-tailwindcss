<?php

namespace Tests\Feature;

use Http\Controllers\ChangePasswordController;
use App\Models\VepostUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ChangePasswordTest extends TestCase
{
    use RefreshDatabase;

    public function testChangePasswordSuccess()
    {
        // Arrange: Create a user in the database
        $user = VepostUser::factory()->create([
            'password' => Hash::make('old_password')
        ]);

        // Act as the user
        $this->actingAs($user);

        // Act: Make a POST request to change the password
        $response = $this->postJson('/change-password', [
            'current_password' => 'old_password',
            'new_password' => 'new_password',
            'new_password_confirmation' => 'new_password',
        ]);

        // Assert: Check if the response is correct
        $response->assertStatus(200)
                 ->assertJson([
                     'success' => true,
                     'message' => 'Password changed successfully',
                 ]);

        // Assert if the password was actually changed
        $this->assertTrue(Hash::check('new_password', $user->fresh()->password));
    }

    public function testChangePasswordFailure()
    {
        // Arrange: Create a user in the database
        $user = VepostUser::factory()->create([
            'password' => Hash::make('old_password')
        ]);

        // Act as the user
        $this->actingAs($user);

        // Act: Make a POST request to change the password
        $response = $this->postJson('/change-password', [
            'current_password' => 'wrong_password',
            'new_password' => 'new_password',
            'new_password_confirmation' => 'new_password',
        ]);

        // Assert: Check if the response is correct
        $response->assertStatus(400)
                 ->assertJson([
                     'success' => false,
                     'message' => 'Current password does not match',
                 ]);

        // Assert if the password was not changed
        $this->assertTrue(Hash::check('old_password', $user->fresh()->password));
    }
}
