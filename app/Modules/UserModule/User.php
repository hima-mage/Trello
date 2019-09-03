<?php

namespace UserModule;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable , HasApiTokens;
 
    protected $fillable = [
        'name', 'email', 'password'
    ];

     
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 
    
    public function setPasswordAttribute($attribute){
        $this->attributes['password'] = bcrypt($attribute);
    }
}
