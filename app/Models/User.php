<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // <-- Use Authenticatable class
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class User extends Model
{
    use HasFactory, Notifiable; 

    protected $table = 'users';  

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  
    ];
      protected $casts = [
        'password' => 'hashed',  // Hashing the password before saving
    ];
}
