<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    // validation
    $this->validate($request, [
      'control_number' => 'required|max:255',
      'email' => 'required|email|max:255',
      'password' => 'required',
    ]);

    // store user
    User::create([
      'control_number' => $request->control_number,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    // sign the user in
    auth()->attempt($request->only('control_number', 'password'));

    // redirect
    return redirect()->route('auth.admin');
  }
}
