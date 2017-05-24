<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeacherStudentEvaluation extends Model
{
    protected $table = 'teachers-students-evaluations';
    protected $fillable = ['id_teacher','id_student', 'evaluation'];

    public function students (){
        return $this->hasMany('App\Model\Users', 'id', 'id_student');
    }
    public function user (){
        return $this->hasOne('App\Model\Users', 'id', 'id_teacher');
    }

}

