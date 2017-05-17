<?php

namespace App\Http\Controllers;

use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Auth::user()->status;

        switch ($status) {
            case 'student':
                $student = Users::find(Auth::user()->id);
                if( count($student->subjects) === 0) {
                     return redirect(route('show_subjects_student'));
                }else{
                     return redirect(route('get_data_eval'));
                }
                break;
            case 'teacher':
                return redirect(route('show_subjects_teacher'));
                break;
            default:
                return view('home');
                break;
        }
    }
}
