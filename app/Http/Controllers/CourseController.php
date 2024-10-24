<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Models\Category;


class CourseController extends Controller
{
    public function index()
    {
        // Retrieve courses ordered by 'created_at' in descending order
        $courses = Course::orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all(); // Retrieve all categories

        // Return the view with the data and success message
        return view('admin.courses.index', compact('courses', 'categories'))
            ->with('success', 'Course created successfully.');
    }


    public function create()
    {
        $categories = Category::all();

        return view('admin.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'required|string|url|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
            $data['image'] = $imagePath;
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $categories = Category::all();

        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'required|string|url|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($course->image) {
                Storage::delete('public/' . $course->image);
            }

            $imagePath = $request->file('image')->store('courses', 'public');
            $data['image'] = $imagePath;
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
