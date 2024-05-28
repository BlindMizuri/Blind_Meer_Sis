<style>
    /* Sidebar styling */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100%;
        padding-top: 20px;
        text-align: left;
        border-right: 1px solid #ddd;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #000000;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
        background-color: #007bff;
        color: #ffffff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="sidebar">
    <a href="{{ url('home') }}" class="sidebar-link {{ Request::is('home') ? 'active' : '' }}">Home</a>
    <a href="{{ url('announcements') }}" class="sidebar-link {{ Request::is('announcements') ? 'active' : '' }}">Announcements</a>
    <a href="{{ url('attendance') }}" class="sidebar-link {{ Request::is('attendance') ? 'active' : '' }}">Attendance</a>
    <a href="{{ url('grades') }}" class="sidebar-link {{ Request::is('grades') ? 'active' : '' }}">Grades</a>
    <a href="{{ url('course-registration') }}" class="sidebar-link {{ Request::is('course-registration') ? 'active' : '' }}">Course Registration</a>
    <a href="{{ url('curriculum') }}" class="sidebar-link {{ Request::is('curriculum') ? 'active' : '' }}">Curriculum</a>
    <a href="{{ url('records') }}" class="sidebar-link {{ Request::is('records') ? 'active' : '' }}">Records</a>
    <a href="{{ url('profile-settings') }}" class="sidebar-link {{ Request::is('profile-settings') ? 'active' : '' }}">Profile Settings</a>
</div>

