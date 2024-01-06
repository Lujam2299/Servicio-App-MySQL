<?php

// app/Models/Admin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
  use HasFactory, Notifiable;

  protected $fillable = [
    'email',
    'password',
  ];

  // Resto del modelo...
}
