<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * setPasswordAttribute
     *
     * Hashes automatically the password so it is not stored in plain text
     *
     * @param string $password The password to be stored as a hash.
     * @return void
     * @author Marco A. Santana
     */
     public function setPasswordAttribute($password)
    {
        //$this->attributes['password'] = Hash::make($password); 
        $this->attributes['password'] = bcrypt($password); 
    }
}
