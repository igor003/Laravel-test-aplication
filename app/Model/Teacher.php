<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['id_user','id_subject'];
}
