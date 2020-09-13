<?php

namespace App\Http\Controllers\Students;

use App\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('students.studentsList',[
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
        //
    }


    public function edit(Students $student)
    {
        //
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
