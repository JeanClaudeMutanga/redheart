<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'type', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Student(){
        return $this->hasMany(Student::class);
    }

    public function Medicals(){
        return $this->hasOne(Medicals::class);
    }

    public function RedCards(){
        return $this->hasOne(RedCards::class);
    }

    public function Individual(){
        return $this->hasOne(Individual::class);
    }

    public function Invites(){
        return $this->hasOne(Invites::class);
    }
}
