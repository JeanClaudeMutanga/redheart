<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    //
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Medicals(){
        return $this->hasOne(Medicals::class);
    }

    public function RedCards(){
        return $this->hasOne(RedCards::class);
    }
}
