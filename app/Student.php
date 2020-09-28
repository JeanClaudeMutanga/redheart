<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'dob', 'school','grade','school_phone','fax','school_address','cardNo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */ 
    
    public function Medicals(){
        return $this->hasOne(Medicals::class);
    }
   
    public function Guardian(){
        return $this->hasOne(Guardian::class);
    }
    
    public function OptGuardian(){
        return $this->hasOne(OptGuardian::class);
    }

    public function RedCards(){
        return $this->hasOne(RedCards::class);
    }

    public function Recipients(){
        return $this->hasOne(Recipients::class);
    }
    
    public function Payments(){
        return $this->hasMany(Payments::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function Banks(){
        return $this->hasOne(Banks::class);
    }
}