<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeacherStudentEvaluation extends Model
{
    protected $table = 'teachers-students-evaluations';
    protected $fillable = ['id_teacher','id_student', 'evaluation'];

}
