@extends('layouts.app')

@section('title', 'View Profile Setting')

@section('content')
    <div class="container">
        <h2>View Profile Setting</h2>
        <div class="form-group">
            <label for="Student_id">Student ID</label>
            <input type="text" class="form-control" id="Student_id" name="Student_id" value="{{ $setting->Student_id }}" readonly>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $setting->password }}" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $setting->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $setting->phone_number }}" readonly>
        </div>
        <div class="form-group">
            <label for="second_phone_number">Second Phone Number</label>
            <input type="text" class="form-control" id="second_phone_number" name="second_phone_number" value="{{ $setting->second_phone_number }}" readonly>
        </div>
        <div class="form-group">
            <label for="profile_picture">Profile Picture</label>
            @if ($setting->profile_picture)
                <img src="{{ asset('storage/' . $setting->profile_picture) }}" alt="Profile Picture" width="100">
            @else
                N/A
            @endif
        </div>
        <a href="{{ route('profile-settings.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
