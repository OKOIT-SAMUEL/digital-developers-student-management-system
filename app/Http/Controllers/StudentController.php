<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addStudent()
{
    return view('add-student');
}

    public function students()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('your_name');
        $student->reg_no = $request->input('reg_no');
        $student->email = $request->input('campus_email');
        $student->programme = $request->input('programme');
        $student->year = $request->input('year');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->back()->with('success', 'Student added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back()->with('success', 'Student deleted successfully.');
    }
}
