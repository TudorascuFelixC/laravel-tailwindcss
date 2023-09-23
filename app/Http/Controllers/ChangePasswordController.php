<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\VepostUser;

class ChangePasswordController extends Controller
{
    public function showForm() {
        return view('passwordChange');
    }
    
    public function changePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match'); 
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        // Check user role and redirect to the respective dashboard
        if ($user->role == 'admin') {
            return redirect()->route('dashboard-admin')->with('success', 'Password changed successfully'); 
        }

        return redirect()->route('dashboard-overview')->with('success', 'Password changed successfully'); 
    }
}
