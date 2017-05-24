<?php

namespace App\Http\Controllers;

use App\Model\Student;
use App\Model\StudentSubject;
use App\Model\Subject;
use App\Model\TeacherStudentEvaluation;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function show_subjects (){
    $subjects = Subject::all();
      return view('homeStudent',['subjects'=> $subjects]);
    }

    public function insert_data(Request $request){
        foreach($request->input('subjects') as $data){
            Users::find(Auth::user()->id)->subjects()->attach($data);
        }
        $student = new Student;
        $student->id_student = Auth::user()->id;
        $student->class = $request->input('class');
        $student->save();
        return redirect(route('get_data_eval'));
    }

    public function get_data_by_evaluations(){
//         $subject = Users::find(Auth::user()->id)->subjects->toArray();
//         $subjects = [];
//        foreach($subject as $sub){
//            $subjects[] =  $sub['subject'];
//        }
        $student = Users::find(Auth::user()->id)->evaluations->sortByDesc('created_at');
        return view('studentDnevnik',['student'=> $student]);
    }
}
