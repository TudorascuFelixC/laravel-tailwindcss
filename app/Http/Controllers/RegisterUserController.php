<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VepostUser;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the input
        $data = $request->validate([
            'username' => 'required|string|max:255|unique:vepost_user',
            'password' => 'required|string|min:6|confirmed',
            'displayname' => 'nullable|string|max:255',
            // Add validation for other fields as necessary
        ]);

        // Create the user
        $user = new VepostUser();
        $user->username = $data['username'];
        $user->vepost_addr = $this->generateVepostAddr(); // Set random vepost_addr
        $user->password = Hash::make($data['password']); // Hash the password
        if (isset($data['displayname'])) {
            $user->displayname = $data['displayname'];
        }
        // Default values for other fields will be automatically set based on the schema
        $user->save();

        // Redirect to a desired location, maybe login page or a welcome page.
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    /**
     * Generate a unique random 16-digit vepost_addr.
     *
     * @return string
     */
    protected function generateVepostAddr(): string
    {
        do {
            $number = mt_rand(1000000000000000, 9999999999999999); // Generates a random 16-digit number
        } while (VepostUser::where('vepost_addr', $number)->exists()); // Ensures uniqueness

        return (string) $number;
    }
}