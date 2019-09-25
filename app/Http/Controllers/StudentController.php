<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $weight = $request->input('weight');
        $students = DB::table('students')
            ->where('name', '=', $name)
            ->where('age', '=', $age)
            ->where('weight', '=', $weight)
            ->get();
        return view('student.search')->with('students', $students);
    }
}
