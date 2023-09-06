<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllStudents extends Model
{
    protected $table = 'all_students';

    protected $fillable = [
       'local_student_id',
       'foreign_student_id',
       'student_type'
    ];
    
    public function localStudent()
    {
        return $this->belongsTo(LocalStudents::class, 'local_student_id');
    }

    public function foreignStudent()
    {
        return $this->belongsTo(ForeignStudents::class, 'foreign_student_id');
    }
}
