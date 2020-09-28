<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    public function Student(){
        return $this->belongsTo(Student::class);
    }
}
