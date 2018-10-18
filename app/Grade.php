<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function lecture()
    {
        return $this->belongsTo(Lecture::Class);
    }

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }


}
