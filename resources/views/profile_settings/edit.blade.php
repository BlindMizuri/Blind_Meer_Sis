@extends('layouts.app')

@section('title', 'Edit Profile Setting')

@section('content')
    <div class="container">
        <h2>Edit Profile Setting</h2>
        <form action="{{ route('profile-settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Student_id">Student ID</label>
                <input type="text" class="form-control" id="Student_id" name="Student_id" value="{{ old('Student_id', $setting->Student_id) }}" readonly>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password', $setting->password) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $setting->email) }}">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $setting->phone_number) }}">
            </div>
            <div class="form-group">
                <label for="second_phone_number">Second Phone Number</label>
                <input type="text" class="form-control" id="second_phone_number" name="second_phone_number" value="{{ old('second_phone_number', $setting->second_phone_number) }}">
            </div>
            <div class="form-group">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                @if ($setting->profile_picture)
                    <img src="{{ asset('storage/' . $setting->profile_picture) }}" alt="Profile Picture" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
