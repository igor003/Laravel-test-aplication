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
}
