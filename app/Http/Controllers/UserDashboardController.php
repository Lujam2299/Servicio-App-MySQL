<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function showDashboard()
    {
        return view('usersDashboard');
    }
    public function showSolicitudes()
    {
        return view('usersSolicitudes');
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
