<?php

namespace App\Http\Controllers;

use App\Models\Course;

class UserCourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('users.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('users.courses.show', compact('course'));
    }
}
