<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Course $course)
    {
        $user = auth()->user();

        // Check if the course exists
        if (!$course) {
            return redirect()->route('courses.index')->with('error', 'Course not found.');
        }

        // Fetch orders for the authenticated user with related courses
        $purchasedCourses = Order::where('user_id', $user->id)->with('course')->get()->pluck('course')->unique('id');

        // Check if the user has already purchased the course
        if ($purchasedCourses->contains('id', $course->id)) {
            return redirect()->route('courses.index')->with('error', 'You have already purchased this course.');
        }

        // Proceed to the checkout view if the course is not purchased
        return view('users.orders.checkout', compact('course'));
    }


    public function purchase(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $user = auth()->user();
        $course = Course::find($request->course_id);

        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }

        $order = Order::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'amount' => $course->price,
            'status' => 'completed',
        ]);

        return redirect()->route('purchased')->with('success', 'Purchase successful!');
    }


    public function history()
    {
        // Fetch orders for the authenticated user
        $orders = Order::where('user_id', auth()->id())->with('course')->get();

        return view('users.orders.history', compact('orders'));
    }
}
