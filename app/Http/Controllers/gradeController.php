<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::all();
        return view('grade', compact('grade'));
    }

    public function show($id)
    {
        $grade = Grade::find($id);

        // Check if the grade exists
        if (!$grade) {
            return response()->json(['error' => 'Grade not found'], 404);
        }

        return response()->json($grade);
    }
}
