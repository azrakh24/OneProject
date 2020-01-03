<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  protected $table = 'users';
  protected $fillable = ['nm_user','username','no_hp_user','password','on_off'];
}
