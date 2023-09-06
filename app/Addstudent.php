<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addstudent extends Model
{
    protected $fillable = [
        'student_type',
        'id_number',
        'name',
        'age',
        'gender',
        'city',
        'mobile_number',
        'grades',
        'email'
    ];
}
