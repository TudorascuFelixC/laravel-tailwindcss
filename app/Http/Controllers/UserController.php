<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $users = User::all();

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
    }
}