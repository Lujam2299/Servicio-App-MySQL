<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function showDashboard()
    {
        return view('usersDashboard');
    }
<<<<<<< HEAD
    public function showSolicitudes()
    {
        return view('usersSolicitudes');
    }
    public function showConfig()
    {
        return view('userConfiguration');
    }
=======
>>>>>>> 573e5f7d7ac1d1243d94d1294dc368189b8a12ce
}
