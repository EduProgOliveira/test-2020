<?php

namespace App\Http\Controllers\Courses;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.coursesList',[
            'courses' => $courses
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


    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        //
    }


    public function update(Request $request, Course $course)
    {
        //
    }


    public function destroy(Course $course)
    {
        //
    }
}
