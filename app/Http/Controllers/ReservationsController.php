<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function rafapinaSchedule()
    {
        return view('/reservations/rafapinaForm');
    }
    public function auditorioSchedule()
    {
        return view('/reservations/auditorioForm');
    }
    public function exdirectoresSchedule()
    {
        return view('/reservations/exdirectoresForm');
    }
}
