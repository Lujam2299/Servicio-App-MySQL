<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['email','nombre_sala','date', 'message', 'status'];
    protected $casts = [
        'status' => 'integer',
    ];
}
