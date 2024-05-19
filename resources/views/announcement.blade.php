@extends('layouts.app')

@section('title', 'Announcement Page')

@section('content')
    <main>
        <div class="announcements">
            <h2>Announcements</h2>
        </div>
        <div id="announcementList">
            @foreach ($announcements as $announcement)
                <div class="popup">
                    <div class="message">
                        <div class="label">Name:</div>
                        <div class="name">{{ $announcement->name }}</div>

                        <div class="label">Title:</div>
                        <div class="title">{{ $announcement->title }}</div>

                        <div class="label">Published:</div>
                        <div class="publish-date">{{ $announcement->published }}</div>

                        <div class="label">Content:</div>
                        <div class="messageContent">{{ $announcement->content }}</div>

                        <div class="label">Deadline:</div>
                        <div class="deadline">{{ $announcement->deadline }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
