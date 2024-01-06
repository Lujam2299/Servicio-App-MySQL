<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegisterController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'email' => 'required|email|unique:admins',
      'password' => 'required|min:8',
    ]);

    $admin = Admin::create([
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    return response()->json([
      'message' => 'Admin created successfully',
      'admin' => $admin,
    ], 201);
  }
}
