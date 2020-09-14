<?php

namespace App\Http\Controllers\Students;

use App\Course;
use App\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('students.index',[
            'students' => $students
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Students $student)
    {
        $courses = Course::all();
        return view('students.show',[
            'student' => $student,
            'courses' => $courses
        ]);
    }


    public function edit(Students $student)
    {
        return view('students.edit',[
            'student' => $student,
        ]);
    }


    public function update(Request $request, Students $student)
    {
        //
    }


    public function destroy(Students $student)
    {
        //
    }
}
