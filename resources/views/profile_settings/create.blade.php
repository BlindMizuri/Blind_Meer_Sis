@extends('layouts.app')

@section('title', 'Create Profile Setting')

@section('content')
    <div class="container">
        <h2>Create Profile Setting</h2>
        <form action="{{ route('profile-settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Student_id">Student ID</label>
                <input type="text" class="form-control" id="Student_id" name="Student_id" value="{{ old('Student_id') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
            </div>
            <div class="form-group">
                <label for="second_phone_number">Second Phone Number</label>
                <input type="text" class="form-control" id="second_phone_number" name="second_phone_number" value="{{ old('second_phone_number') }}">
            </div>
            <div class="form-group">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
