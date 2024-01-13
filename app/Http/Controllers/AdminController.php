<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.admin-dashboard');
  }
  public function showReservations()
    {
        $reservations = Reservation::where('status', 1)->get();
        return view('admin-reservations', ['reservations' => $reservations]);
    }
}
