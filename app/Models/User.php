<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;

class User extends Authenticatable
{
    use Notifiable;

    protected $keyType = 'string';
    protected $table = 'user';
    protected $fillable = ['username','email','nama', 'password', 'jeniskelamin', 'alamat', 'kodepos','foto'];
    protected $primaryKey = 'username';
    public $timestamps = false;
    protected $guard = 'user';
}