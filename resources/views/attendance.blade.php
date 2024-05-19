@extends('layouts.app')

@section('title', 'Attendance Page')

@section('content')
       <main class="main">
        <div class="announcements">
            <h2>Attendance</h2>
        </div>
        <div id="attendanceList">
            <table id="attendanceTable">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Status</th>
                    <th>Applied Rate</th>
                    <th>Fall Rate</th>
                    <th>Total Classes</th>
                    <th>Attended Classes</th>
                    <th>Registration Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->course }}</td>
                        <td>{{ $attendance->status }}</td>
                        <td>{{ $attendance->applied_rate }}%</td>
                        <td>{{ $attendance->fall_rate }}%</td>
                        <td>{{ $attendance->total_classes }}</td>
                        <td>{{ $attendance->attended_classes }}</td>
                        <td>{{ $attendance->registration_date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
