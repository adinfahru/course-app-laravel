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
        $course = Course::findOrFail($id);
        return view('users.courses.show', compact('course'));
    }

    public function purchasedCourses()
    {
        // Fetch orders for the authenticated user with related courses
        $orders = Order::where('user_id', auth()->id())->with('course')->get();

        // Extract courses from orders
        $purchasedCourses = $orders->pluck('course'); // This will give you a collection of courses

        return view('users.courses.purchased', compact('purchasedCourses'));
    }
}
