<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable

{
    /** @use HasFactory<\Database\Factories\PenggunaFactory> */
    use HasFactory;

    protected $table = "data_pengguna";
    protected $fillable = [
        "nama",
        "username",
        "password",
    ];
}
