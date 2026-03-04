<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillParticipant;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function standard()
    {
        $user = Auth::user();
        
        // Get user's bills (as host or participant)
        $billIds = BillParticipant::where('user_id', $user->id)->pluck('bill_id');
        
        $bills = Bill::where('host_user_id', $user->id)
            ->orWhereIn('id', $billIds)
            ->where('status', 'active')
            ->withCount('participants')
            ->get();

        return view('dashboard-standard', compact('bills'));
    }

    public function premium()
    {
        $bills = Bill::where('host_user_id', Auth::id())
            ->where('status', 'active')
            ->withCount('participants')
            ->get();

        return view('dashboard-premium', compact('bills'));
    }

    public function guest()
    {
        $guestId = session('guest_user');
        
        if (!$guestId) {
            return redirect('/');
        }

        $billIds = BillParticipant::where('user_id', $guestId)->pluck('bill_id');
        
        $bills = Bill::whereIn('id', $billIds)
            ->where('status', 'active')
            ->withCount('participants')
            ->get();

        return view('dashboard-guest', compact('bills'));
    }
}