<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" type="text/css" href="https://my.tiu.edu.iq/config/1.css">
    <style>
        /* Global styles for the page */
        body {
            background-color: #fafafa;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #262626;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        h1{
            font-size: 23px;
            margin-top: 2em;
            margin-bottom: 1em;
            text-align: left;
            color: #262626;
        }

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

        .sidebar a:hover {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .sidebar a:hover::before {
            opacity: 1;
            transform: translate(-50%, -50%);
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        /* Sidebar button styling */
        #openNav {
            background-color: transparent;
            border: none;
            position: fixed;
            z-index: 1;
            top: 20px;
            left: 20px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 50px;
        }

        #openNav span {
            height: 3px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            position: relative;
            transform-origin: center;
            transition: all 0.3s ease;
        }

        #openNav span:before,
        #openNav span:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .logo {
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 200px);
            display: flex;
            align-items: center;
            height: 60px;
            z-index: 9999;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .system_title{
            margin-left: auto;
            margin-right: 6em;
            font-size: medium;

        }

        .sidebar {
            width: 250px;
        }

        #openNav {
            display: none;
        }
        main {
            position: relative;
            top: 50px;
            left: 25em;
            bottom: 0;
            right: 10em;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            font-size: 20px;
            margin-bottom: 2em;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Set the background color for even rows */
        }

        tr:nth-child(odd) {
            background-color: #ffffff; /* Set the background color for odd rows */
        }

        .semester {
            background-color: #007bff;
            color: rgb(255, 255, 255);
            font-size: 14px;
        }
        .TopSemester{
            font-size: 16px;
        }
        .tableData{
            font-size: 6px;
        }




    </style>
</head>
<body>

<!-- Navigation sidebar menu -->
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

<button id="openNav" >
    <img src="pngwing.com.png" sizes="10%" style="height: 2.5em; width: 2.5em;">
</button>

<!-- Logo and Title -->
<div id="logo_title" class="logo">
    <img src="img/Logo.png" alt="logo" width="60" height="60">
    <span style="font-size: 1.5em; margin-left: 10px;">Tishk International University</span>
    <span class="system_title">Student Information System</span>
</div>

<main>
    <h1>Records</h1>
    <table>
        <thead>
        <tr>
            <th colspan="8" class="TopSemester">First Semester 2021-2022</th>
        </tr>
        <tr>
            <th colspan="8" class="semester">Number of Course: 8 | Total Credits: 23 | Total Grade: 39 | Average of Semester: 2.5</th>
        </tr>
        <tr>
            <th>Course Code</th>
            <th>Name of Course</th>
            <th>Credits</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>DBT 101</td>
            <td>ACADEMIC DEBATE AND CRITICAL THINKING I</td>
            <td>2</td>
            <td>BB</td>
            <td></td>
        </tr>
        <tr>
            <td>ELT 103</td>
            <td>ADVANCED ENGLISH</td>
            <td>3</td>
            <td>BB</td>
            <td></td>
        </tr>
        <tr>
            <td>IT 105</td>
            <td>INTRODUCTION TO INFORMATION TECHNOLOGY I</td>
            <td>3</td>
            <td>CC</td>
            <td></td>
        </tr>
        <tr>
            <td>PHYS 101</td>
            <td>PROGRAMMING I</td>
            <td>4</td>
            <td>BA</td>
            <td></td>
        </tr>
        <tr>
            <td>TUR 103</td>
            <td>CALCULUS I</td>
            <td>4</td>
            <td>CC</td>
            <td></td>
        </tr>
        <tr>
            <td>TUR 105</td>
            <td>GENERAL PHYSICS I</td>
            <td>3</td>
            <td>BC</td>
            <td></td>
        </tr>
        <tr>
            <td>PSY 101</td>
            <td>TURKISH I</td>
            <td>2</td>
            <td>CB</td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan="8" class="TopSemester">Second Semester 2022-2023</th>
        </tr>
        <tr>
            <th colspan="8" class="semester">Number of Course: 8 | Total Credits: 23 | Total Grade: 39 | Average of Semester: 2.6</th>
        </tr>
        <tr>
            <th>Course Code</th>
            <th>Name of Course</th>
            <th>Credits</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>DBT 102</td>
            <td>ACADEMIC DEBATE AND CRITICAL THINKING II</td>
            <td>2</td>
            <td>BC</td>
            <td></td>
        </tr>
        <tr>
            <td>ELT 103</td>
            <td>TECHNICAL ENGLISH</td>
            <td>3</td>
            <td>BB</td>
            <td></td>
        </tr>
        <tr>
            <td>IT 106</td>
            <td>INTRODUCTION TO INFORMATION TECHNOLOGY II</td>
            <td>3</td>
            <td>CB</td>
            <td></td>
        </tr>
        <tr>
            <td>PHYS 102</td>
            <td>PROGRAMMING II</td>
            <td>4</td>
            <td>BA</td>
            <td></td>
        </tr>
        <tr>
            <td>TUR 104</td>
            <td>CALCULUS II</td>
            <td>4</td>
            <td>BC</td>
            <td></td>
        </tr>
        <tr>
            <td>TUR 106</td>
            <td>GENERAL PHYSICS II</td>
            <td>3</td>
            <td>AC</td>
            <td></td>
        </tr>
        <tr>
            <td>PSY 102</td>
            <td>TURKISH II</td>
            <td>2</td>
            <td>CB</td>
            <td></td>
        </tr>
        </tbody>
    </table>

</main>

</body>

</html>
