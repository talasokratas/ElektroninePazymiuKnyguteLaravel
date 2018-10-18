<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function lectureGrades ()
    {
        return $this-> hasMany(Grade::Class);
    }

    public function students ()
    {
        return $this-> belongsToMany(Student::Class, 'grades');
    }
}
