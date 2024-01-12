<?php

namespace App\Http\Controllers;
use App\Models\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function showDashboard()
    {
        return view('usersDashboard');
    }
    public function showSolicitudes()
    {
        $userEmail = Auth::user()->email;
        $reservations = Reservation::where('email', $userEmail)->get();

        return view('usersSolicitudes', compact('reservations'));
    }
    public function showConfig()
    {
        return view('userConfiguration');
    }
    public function reservationSuccessful()
    {
        return view('/reservations/successreservation');
    }

}
