<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Publisher extends Authenticatable
{
    protected $fillable = ['username', 'password', 'gmail', 'facebook', 'phone'];

    public function username()
    {
        return 'username';
    }
}
