<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function courses()
    {

    $courses = Course::all();
        return view('courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses = new Course();
        $courses->course_code = $request->input('course_code');
        $courses->course_title = $request->input('course_title');
        $courses->lecturer_id = $request->input('lecturer_id');
        $courses->capacity = $request->input('capacity');
        $courses->credits = $request->input('credits');
        $courses->level = $request->input('level');
        $courses->save();
        return redirect()->route('courses');

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
    $course->delete();

    return redirect()->route('courses');
    }
}
