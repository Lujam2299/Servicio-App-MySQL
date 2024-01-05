<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.students');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (!auth()->attempt($request->only('email', 'password'))) {
      return back()->with('status', 'Credenciales no válidas');
    }

    return redirect()->route('admin.index');
  }

  public function admin()
  {
    return view('auth.admin');
  }
}
