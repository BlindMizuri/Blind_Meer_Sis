@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
    <div class="container">
        <h2>Profile Settings</h2>
        <a href="{{ route('profile-settings.create') }}" class="btn btn-primary">Create New Setting</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Second Phone Number</th>
                <th>Profile Picture</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($profileSettings as $setting)
                <tr>
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->Student_id }}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->phone_number }}</td>
                    <td>{{ $setting->second_phone_number }}</td>
                    <td>
                        @if ($setting->profile_picture)
                            <img src="{{ asset('storage/' . $setting->profile_picture) }}" alt="Profile Picture" width="50" height="50">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('profile-settings.edit', $setting->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('profile-settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this profile setting?');">Delete</button>
                        </form>
                        <a href="{{ route('profile-settings.show', $setting->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
