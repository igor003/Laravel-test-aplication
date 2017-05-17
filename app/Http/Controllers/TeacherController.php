<?php

namespace App\Http\Controllers;

use App\Model\Student;
use App\Model\Subject;
use App\Model\Teacher;
use App\Model\TeacherStudentEvaluation;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TeacherController extends Controller
{
    public function show_subjects(){
        $subjects = Subject::all();
        return view('homeTeacher',['subjects'=>$subjects]);
    }

    public function insert_data(Request $request){
        $teacher = new Teacher;
        $teacher->id_user = Auth::user()->id;
        $teacher->id_subject = $request->input('subject');
        $teacher->save();
        return redirect(route('get_sub_by_id',['id'=> $request->input('subject')]));
    }

    public function get_subject_by_id($id)
    {
        return view('teacherJournal', ['id_subject' => $id]);
    }

    public function get_students_by_class(Request $request){
        $student_by_class = Student::where('class','=', $request->input('class'))->get();
        $students = [];
        foreach($student_by_class as $student){
            $students[] = $student->id_student;
        }
        $student_by_subject = Users::whereHas('subjects', function ($query) use($request , $students) {
              $query->where('id_subject', '=', $request->input('subject_id'))->whereIn('id_student',$students);
          })->get();

        return view('studentsOption',['students'=>$student_by_subject]);
    }
    public function insert_evaluations(Request $request){
        $data = new TeacherStudentEvaluation ;
        $data->id_teacher = Auth::user()->id;
        $data->id_student = $request->input('student');
        $data->evaluation = $request->input('evaluation');
        $data->save();
        return view('teacherJournal',['id_subject'=>$request->input('subject_id')]);
    }
}
