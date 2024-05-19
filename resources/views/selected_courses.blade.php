@extends('layouts.app')

@section('title', 'Selected Courses')

@section('content')
    <div class="container">
        <h2>Selected Courses</h2>

        @if ($registrations->isEmpty())
            <p>You have not registered for any courses yet.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Credits</th>
                    <th>Semester</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($registrations as $registration)
                    <tr>
                        <td>{{ $registration->course->code }}</td>
                        <td>{{ $registration->course->name }}</td>
                        <td>{{ $registration->course->credits }}</td>
                        <td>{{ $registration->course->semester }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
