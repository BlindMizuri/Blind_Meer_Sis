<!DOCTYPE html>
<html>
<head>
    <title>Bachelor of Science in Computer Science Curriculum</title>
    <style>
        /* Global styles for the page */
        body {
            background-color: #fafafa;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #262626;
            line-height: 1.5;
            padding: 0;
            overflow-x: hidden;
        }

        /* Styles for the heading */
        h1 {
            font-size: 28px;
            margin-bottom: 0.5em;
            text-align: left;
            color: #262626;
        }

        #year{
            width: 79.5% !important;
        }
        p{
            font-size: 19px;
        }


        .P_red{
            color: red;
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
            z-index: 9999;
            background-color: #fafafa;
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
            z-index: 9998;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fafafa;
        }
        .system_title{
            margin-left: auto;
            margin-right: 6em;
            font-size: medium;
        }

        .sidebar {
            width: 250px;
        }

        #course_colors{
            display: flex;
            margin-left: 55em;
            padding-top: 1em;
        }
        #blue{
            color: #4f36e9;
            font-size: 15px;
        }
        #green{
            padding-left: 1em;
            color: green;
            font-size: 15px;

        }
        #orange{
            padding-left: 1em;
            color: orange;
            font-size: 15px;

        }

        #red{
            padding-left: 1em;
            color: red;
            font-size: 15px;
        }

        #grey{
            padding-left: 1em;
            color: grey;
            font-size: 15px;
        }

        #year{
            width: 81%;
            background-color: rgb(165, 212, 164);
            font-size: 24px;
            text-align: center;
            letter-spacing: 2px;
            margin-bottom: 0em;
        }

        table{
            border-collapse: collapse;
            width: 40%;
            border: 1px solid #000000;
        }

        .term{
            background-color: #a498f1;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            height: 1em;
        }
        .TableDiv {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        .flexTable{
            display: flex;
            width: 98%;
        }
        .SemesterRight{
            margin-left: 20px;
        }
        .Failed{
            color: red;
        }

        .course-column {
            width: 20em; /* or any value you want */
        }
        td {
            width: 10%; /* Set the width of the other cells to 8% */
            text-align: left; /* Center the text within the cells */
            border: 1px solid black; /* Add a border around the cells */
            height: 2em;
            padding-left: 5px;
        }
        #tableH{
            background-color: #e2e2e2;
            font-weight: bold;
        }

        .CompleteCourses{
            color: green;
        }
        .TakenCourses{
            color: orange;
        }
        .NotYetTaken{
            color: #4f36e9;
        }



        @media only screen and (min-width: 768px) {
            .sidebar {
                width: 250px;
            }

            #openNav {
                display: none;
            }
            main {
                position: relative;
                top: 5em;
                left: 290px;
                bottom: 0;
                right: 10em;
            }
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

    <div style="display: flex;">
        <h1>Curriculum</h1>
        <div class="topP" id="course_colors">
            <p class="topP" id="blue">Not taken yet</p>
            <p class="topP" id="green">Completed successfuly</p>
            <p class="topP" id="orange">Taken courses</p>
            <p class="topP" id="red">Failed courses</p>
            <p class="topP" id="grey">Excused courses</p>
        </div>
    </div>

    <!-- First Year -->
    <!-- First Semester -->
    <div class="TableDiv">
        <h2 id="year">First Year</h2>
        <div class="flexTable">
            <table>
                <tr>
                    <th class="term" colspan="6">First Semester</th>
                </tr>
                <tr id="tableH">
                    <td>Course code</td>
                    <td class="course-column"> Course</td>
                    <td>Type</td>
                    <td>Credit</td>
                    <td>ECTS</td>
                    <td>Year</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>DBT 101</td>
                    <td class="course-column">ACADEMIC DEBATE AND CRITICAL THINKING I</td>
                    <td>Main</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>ELT 103</td>
                    <td class="course-column">ADVANCED ENGLISH</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>4</td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>IT 105</td>
                    <td class="course-column">NTRODUCTION TO INFORMATION TECHNOLOGY I</td>
                    <td>Main</td>
                    <td>3</td>
                    <td></td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>IT 107</td>
                    <td class="course-column">PROGRAMMING I</td>
                    <td>Main</td>
                    <td>4</td>
                    <td></td>
                    <td>2021</td>
                </tr>

                <tr class="TakenCourses">
                    <td>IT 163</td>
                    <td class="course-column">CALCULUS I</td>
                    <td>Main</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="CompleteCourses">
                    <td>PHYS 101</td>
                    <td class="course-column">GENERAL PHYSICS I</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>5</td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>TUR 121</td>
                    <td class="course-column">TURKISH I</td>
                    <td>NA/NT</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2022</td>
                </tr>
            </table>


            <!-- second semester -->
            <table class="SemesterRight">
                <tr>
                    <th class="term" colspan="6">Second Semester</th>
                </tr>
                <tr id="tableH">
                    <td>Course code</td>
                    <td class="course-column"> Course</td>
                    <td>Type</td>
                    <td>Credit</td>
                    <td>ECTS</td>
                    <td>Year</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>DBT 102</td>
                    <td class="course-column">ACADEMIC DEBATE AND CRITICAL THINKING II</td>
                    <td>Main</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>ELT 104</td>
                    <td class="course-column">TECHNICAL ENGLISH</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>4</td>
                    <td>2021</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>IT 106</td>
                    <td class="course-column">	INTRODUCTION TO INFORMATION TECHNOLOGY II</td>
                    <td>Main</td>
                    <td>3</td>
                    <td></td>
                    <td>2021</td>
                </tr>

                <tr class="TakenCourses">
                    <td>IT 108</td>
                    <td class="course-column">PROGRAMMING II</td>
                    <td>Main</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="NotYetTaken">
                    <td>IT 164</td>
                    <td class="course-column">CALCULUS II</td>
                    <td>Main</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="TakenCourses">
                    <td>PHYS 102</td>
                    <td class="course-column">GENERAL PHYSICS II</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>5</td>
                    <td></td>
                </tr>

                <tr class="CompleteCourses">
                    <td>TUR 122</td>
                    <td class="course-column">TURKISH II</td>
                    <td>NA/NT</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2021</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Second Year -->
    <!-- First Semester -->
    <div class="TableDiv">
        <h2 id="year">Second Year</h2>
        <div class="flexTable">
            <table>
                <tr>
                    <th class="term" colspan="6">First Semester</th>
                </tr>
                <tr id="tableH">
                    <td>Course code</td>
                    <td class="course-column"> Course</td>
                    <td>Type</td>
                    <td>Credit</td>
                    <td>ECTS</td>
                    <td>Year</td>
                </tr>

                <tr class="NotYetTaken">
                    <td>IT 201</td>
                    <td class="course-column">DATA STRUCTURES & ALGORITHMS (21121)</td>
                    <td>Main</td>
                    <td>4</td>
                    <td>8</td>
                    <td></td>
                </tr>

                <tr class="Failed">
                    <td>IT 215</td>
                    <td class="course-column">DATABASE SYSTEMS I</td>
                    <td>Main</td>
                    <td>3</td>
                    <td></td>
                    <td>2022</td>
                </tr>

                <tr class="CompleteCourses">
                    <td>IT 217</td>
                    <td class="course-column">MULTIMEDIA TECHNOLOGIES</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>5</td>
                    <td>2022</td>
                </tr>

                <tr class="Failed">
                    <td>IT 229</td>
                    <td class="course-column">COMPUTER HARDWARE</td>
                    <td>Main</td>
                    <td>4</td>
                    <td></td>
                    <td>2022</td>
                </tr>

                <tr class="NotYetTaken">
                    <td>IT 235</td>
                    <td class="course-column">DISCRETE MATHEMATICS (15015)</td>
                    <td>Main</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>


            <!-- second semester -->
            <table class="SemesterRight">
                <tr>
                    <th class="term" colspan="6">Second Semester</th>
                </tr>
                <tr id="tableH">
                    <td>Course code</td>
                    <td class="course-column"> Course</td>
                    <td>Type</td>
                    <td>Credit</td>
                    <td>ECTS</td>
                    <td>Year</td>
                </tr>

                <tr class="TakenCourses">
                    <td>IT 212</td>
                    <td class="course-column">OBJECT ORIENTED PROGRAMMING</td>
                    <td>Main</td>
                    <td>2</td>
                    <td>3</td>
                    <td>2021</td>
                </tr>

                <tr class="TakenCourses">
                    <td>IT 216</td>
                    <td class="course-column">DATABASE SYSTEMS II</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>4</td>
                    <td></td>
                </tr>

                <tr class="CompleteCourses">
                    <td>IT 218</td>
                    <td class="course-column">COMPUTER AIDED DESIGN (15026)</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>5</td>
                    <td></td>
                </tr>

                <tr class="NotYetTaken">
                    <td>IT 236</td>
                    <td class="course-column">COMPUTER AIDED DESIGN (15026)</td>
                    <td>Main</td>
                    <td>3</td>
                    <td>5</td>
                    <td></td>
                </tr>

                <tr class="NotYetTaken">
                    <td>IT 240</td>
                    <td class="course-column">WEB DESIGN</td>
                    <td>Main</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="TakenCourses">
                    <td>ELT 270</td>
                    <td class="course-column">ACADEMIC WRITING SKILLS II</td>
                    <td>NA/NT</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>


</main>
</body>

<script>

</script>

</html>
