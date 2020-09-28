<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedCards extends Model
{
    public function Student(){
        return $this->belongsTo(Student::class);
    }
   
    public function User(){
        return $this->belongsTo(User::class);
    }
}
