<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id_user','class'];
    protected $table = 'students';

    public function evaluations(){
        return hasOne('App/Model\TeacherStudentEvaluation','id_student','id_student');
    }
}
