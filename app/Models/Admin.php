<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
 
    use Notifiable;

    protected $guard = 'admin';

    protected $hidden = [
        'password', 'remember_token',
    ];
}
