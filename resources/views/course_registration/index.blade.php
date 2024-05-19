@extends('layouts.app')

@section('title', 'Course Registration')

@section('content')
    <div class="container">
        <h2>Course Registration</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('course.registration.register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="course">Select Course</label>
                <select name="course_id" id="course" class="form-control" required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->code }} - {{ $course->name }} - Credits: {{ $course->credits }} - Semester: {{ $course->semester }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <div class="selected-courses-link">
            <a href="{{ route('selected.courses.index') }}" class="btn btn-secondary">View Selected Courses</a>
        </div>
    </div>
@endsection
