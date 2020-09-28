<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
}
