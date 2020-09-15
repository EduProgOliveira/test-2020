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
        return view('courses.index',[
            'courses' => $courses
        ]);
    }


    public function create()
    {
        return view('courses.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'O Campo Titulo é obrigatorio',
            'description.required' => 'O Campo Descrição é obrigatorio',
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->save();

        return redirect()->route('course.index');
    }


    public function show(Course $course)
    {
        return view('courses.show',['course' => $course]);
    }


    public function edit(Course $course)
    {
        return view('courses.edit',[
            'course' => $course
        ]);
    }


    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'O Campo Titulo é obrigatorio',
            'description.required' => 'O Campo Descrição é obrigatorio',
        ]);

        $course->title = $request->title;
        $course->description = $request->description;
        $course->save();

        return redirect()->route('course.show',['course' => $course]);
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
