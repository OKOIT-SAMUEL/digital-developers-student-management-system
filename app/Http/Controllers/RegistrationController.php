<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

public function addStudent()
{
    return view('add-student');
}

public function saveStudent(Request $request)
{
    $student = new Student();
    $student->your_name = $request->input('your_name');
    $student->reg_no = $request->input('reg_no');
    $student->campus_email = $request->input('campus_email');
    $student->programme = $request->input('programme');
    $student->year = $request->input('year');
    $student->phone = $request->input('phone');
    $student->status = $request->input('status');
    $student->save();
    return redirect()->back();
}


public function registrations()
{
     $registrations = Registration::all();
    return view('registrations', compact('registrations'));
}


    public function enroll()
    {
        $students = Student::all();
        $registrations = Registration::all();
        return view('enroll', compact('students', 'registrations'));
    }

    public function store(Request $request)
    {
        $registration = new Registration();
        $registration->student = $request->input('student');
        $registration->course = $request->input('course');
        $registration->note = $request->input('note');
        $registration->save();
        return redirect()->back();
    }
}