<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'status'];

    public function subjects(){
        return $this->belongsToMany('App\Model\Subject','students-subjects','id_student','id_subject');
    }
    public function is_teacher(){
        return $this->attributes->status === 'teacher';
    }
    public function evaluations(){
        return $this->hasMany('App\Model\TeacherStudentEvaluation','id_student','id');
    }
    public function teachers(){
        return $this->hasMany('App\Model\TeacherStudentEvaluation','id_teacher','id');
    }
    public function teacher(){
        return $this->hasOne('App\Model\Teacher','id_user','id');
    }

}
