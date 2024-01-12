<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;

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



    public function store(Request $request)
    {
        $request->validate([
            'nombre_sala' => 'required|string',
            'reservation_date' => 'required|date',
            'reservation_message' => 'nullable|string',
        ]);

        Reservation::create([
            'nombre_sala' => $request->input('nombre_sala'),
            'date' => $request->input('reservation_date'),
            'message' => $request->input('reservation_message'),
            'status' => 1, // Estado "sin responder"
        ]);

        return redirect()->route('user.reservation')->with('success', 'Reserva realizada con éxito');
    }
}
