<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
      'email' => 'required|email|max:255',
      'password' => 'required',
    ]);

    // store user
    User::create([
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    // sign the user in
    auth()->attempt($request->only('email', 'password'));

    // redirect
    return redirect()->route('auth.admin');
  }
}