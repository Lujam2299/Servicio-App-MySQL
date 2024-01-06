<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

  public function adminIndex()
  {
    return view('auth.admin');
  }

  public function admin(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (!Auth::guard('admin')->attempt($request->only('email', 'password'))) {
      return back()->with('status', 'Credenciales no válidas');
    }

    return redirect()->route('admin.index');
  }
}
