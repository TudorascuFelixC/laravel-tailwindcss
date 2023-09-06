<?php

namespace App\Http\Controllers;

use App\Models\VepostUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllUsers()
    {
        try {
            $users = VepostUser::get();  // Retrieve all users from the database

            return response()->json([
                'success' => true,
                'data' => $users,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Could not fetch users',
            ], 500);
        }
    }

    /**
     * Get one user by ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOneUser($id)
    {
        $user = VepostUser::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }
}
