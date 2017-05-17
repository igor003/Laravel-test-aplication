<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject'];

    public function users(){
        return $this->belongsToMany('App\Model\Users','students-subjects','id_subject','id_student');
    }
}
