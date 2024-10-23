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

    public function purchasedCourses()
    {
        $user = auth()->user(); // Get the currently authenticated user
        $purchasedCourses = $user->purchasedCourses(); // Fetch purchased courses

        return view('users.courses.purchased', compact('purchasedCourses'));
    }
}
