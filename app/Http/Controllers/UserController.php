<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bill;
use App\Models\BillParticipant;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            // Redirect based on user type
            return Auth::user()->user_type === 'premium' 
                ? redirect('/dashboard-premium') 
                : redirect('/dashboard-standard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:16|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'user_type' => 'standard',
            'password' => $request->password,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/dashboard-standard');
    }

    public function guestLogin(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email',
            'associated_code' => 'required|string|max:20',
        ]);

        // Find valid invitation
        $invitation = Invitation::where('invitation_code', $request->associated_code)
            ->where('status', 'pending')
            ->first();

        if (!$invitation) {
            return back()->withErrors(['associated_code' => 'Invalid invitation code']);
        }

        // Create guest user
        $guest = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'user_type' => 'guest',
        ]);

        // Add to bill
        BillParticipant::create([
            'bill_id' => $invitation->bill_id,
            'user_id' => $guest->id,
        ]);

        // Mark invitation as accepted
        $invitation->update(['status' => 'accepted']);

        // Store guest in session
        session(['guest_user' => $guest->id]);

        return redirect('/dashboard-guest');
    }
}