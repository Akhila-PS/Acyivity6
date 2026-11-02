<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
{
    $student = new \App\Models\Student();
    $student->roll_no    = $request->roll_no;
    $student->name       = $request->name;
    $student->email      = $request->email;
    $student->department = $request->department;
    $student->semester   = $request->semester;
    $student->cgpa       = $request->cgpa;
    $student->save();

    return redirect('/students')->with('status', 'Student created successfully!');
}

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}