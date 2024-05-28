@extends('layouts.app')

@section('title', 'Grading System')

@section('content')
      <main class="main">
        <div class="announcements">
            <h2>Grades</h2>
        </div>
        <div id="gradesList">
            <table id="gradesTable">
                <tbody>
                @foreach ($grade as $grade)
                    <tr onclick="showDetails(this, {{ $grade->id }})">
                        <td>{{ $grade->course_name }}</td>
                        <td>{{ $grade->grade }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div id="detailsTableContainer"></div> <!-- Container for the details table -->
    </main>
@endsection
