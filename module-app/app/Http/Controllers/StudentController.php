<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }

    public function show(int $course) {
        $students = Student::where('course', strval($course))->get();
        if (!isset($students)){
            return abort(404);
        }
        return view('student.show', ['students' => $students]);
    }
}
