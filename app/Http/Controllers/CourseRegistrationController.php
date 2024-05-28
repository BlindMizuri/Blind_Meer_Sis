<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Support\Facades\Auth;

class CourseRegistrationController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course_registration.index', compact('courses'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $courseRegistration = CourseRegistration::create([
            'student_id' => Auth::id(),
            'course_id' => $request->course_id,
        ]);

        return redirect()->route('course.registration.index')->with('success', 'Course registered successfully!');
    }
}
