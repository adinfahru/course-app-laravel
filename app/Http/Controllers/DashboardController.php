<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the data
        $categories = Category::paginate(10);
        $courses = Course::orderBy('created_at', 'desc')->paginate(10);
        $orders = Order::with('user', 'course')->latest()->take(10)->get();
        $users = User::paginate();

        // Pass the data to the view
        return view('admin.dashboard.index', compact('categories', 'courses', 'orders', 'users'));
    }
}
