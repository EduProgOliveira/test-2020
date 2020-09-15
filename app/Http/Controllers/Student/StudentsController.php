<?php

namespace App\Http\Controllers\Student;

use App\Course;
use App\Register;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index',[
            'students' => $students
        ]);
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birth_date' => 'required',
        ],[
            'name.required' => 'O Campo Nome é obrigatorio',
            'email.required' => 'O Campo Email é obrigatorio',
            'birth_date.required' => 'O Campo Data de Nascimento é obrigatorio',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birth_date = $request->birth_date;
        $student->save();

        return redirect()->route('student.index');
    }

    public function registerCourse(Request $request, Student $student)
    {

        $course = Course::where('id','=',$request->course)->first();

        $registerCourse = new Register();
        $registerCourse->student = $request->student;
        $registerCourse->course = $request->course;
        $registerCourse->title = $course->title;
        $registerCourse->description = $course->description;


        if($registerCourse->save()){
            $register['success'] = true;
            $register['message'] = 'OK';
            echo json_encode($register);
            return;
        }else{
            $register['success'] = false;
            $register['message'] = 'ERRO';
            echo json_encode($register);
            return;
        }



    }


    public function show(Student $student)
    {
        $registers = $student->courses()->get();
        $courses = Course::all();
        return view('students.show',[
            'student' => $student,
            'registers' => $registers,
            'courses' => $courses,
        ]);
    }


    public function edit(Student $student)
    {
        return view('students.edit',[
            'student' => $student,
        ]);
    }


    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'birth_date' => 'required',
        ],[
            'name.required' => 'O Campo Nome é obrigatorio',
            'email.required' => 'O Campo Email é obrigatorio',
            'birth_date.required' => 'O Campo Data de Nascimento é obrigatorio',
        ]);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birth_date = $request->birth_date;

        $student->save();

        return redirect()->route('student.show',['student' => $student]);
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
