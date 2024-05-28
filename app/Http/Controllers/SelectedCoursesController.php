<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Support\Facades\Auth;

class SelectedCoursesController extends Controller
{
    public function index()
    {
        // Fetch the courses registered by the authenticated student
        $registrations = CourseRegistration::with('course')
            ->where('student_id', Auth::id())
            ->get();

        return view('selected_courses', compact('registrations'));
    }
}
