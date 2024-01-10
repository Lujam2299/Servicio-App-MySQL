<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function showDashboard()
    {
        return view('usersDashboard');
    }
}
