@extends('Login')

@section('content')
    <!-- Logo image and text -->
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="SIS Logo" id="logo" aria-label="SIS logo" title="Student Information System">
    </div>
    <!-- Login form -->
    <h1>Student Information System</h1>
    <form method="post" action="">
        <label for="StudentID">
            <input type="text" id="StudentID" name="StudentID" aria-label="Student ID" placeholder="Student ID" autocomplete="StudentID">
        </label>
        <label for="password">
            <input type="password" id="password" name="password" aria-label="Password" placeholder="Password" autocomplete="current-password">
        </label>
        <p id="errorMessage" aria-label="Error Message"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></p>
        <input type="submit" value="Log In" id="submit" aria-label="submit" style="width: 100%;">
    </form>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
