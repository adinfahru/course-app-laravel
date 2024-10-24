<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;

class UserCourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('users.courses.index', compact('courses'));
    }

    public function show($id)
    {
        // Attempt to find the course by ID
        $course = Course::find($id);

        // Check if the course exists
        if (!$course) {
            // Handle the case where the course is not found
            return redirect()->route('courses.index')->with('error', 'Course not found.');
        }

        // If the course exists, return the view
        return view('users.courses.show', compact('course'));
    }

    public function purchasedCourses()
    {
        // Fetch orders for the authenticated user with related courses
        $orders = Order::where('user_id', auth()->id())->with('course')->get();

        // Extract unique courses from orders
        $purchasedCourses = $orders->pluck('course')->unique(); // This will give you a collection of unique courses

        return view('users.courses.purchased', compact('purchasedCourses'));
    }
}
