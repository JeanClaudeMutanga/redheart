<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
}
