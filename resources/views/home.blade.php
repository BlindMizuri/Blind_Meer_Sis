@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <body>
    <main>
    <div class="divProfile">
        <img class="ProfilePic" src="{{ asset('img/user2.jpg') }}" alt="Profile picture">
        <div class="Align-Info">
            <h2>Kiran Acharya</h2>
            <p class="Student-Info">
                <b>Department:</b> INFORMATION TECHNOLOGY<br>
                <b>Student ID:</b> 150721032<br>
                <b>GRADE:</b> 2<br>
                <b>E-mail:</b> Kiran.acharya@gmail.com<br>
                <b>GPA:</b> 2.5<br>
            </p>
        </div>

        <table>
            <tr>
                <th colspan="4" class="tableHeader">Latest Announcement</th>
            </tr>
            <tr class="openAnnouncementPage" onclick="openAnnouncementPage()">
                <td style="width: 1;"><i class="fa-regular fa-message"></i></td>
                <td>11-May<br>10:25</td>
                <td>Alaa Ghazi</td>
                <td><i class="fa-solid fa-angle-right"></i></td>
            </tr>
            <tr>
                <th colspan="4" class="tableHeader">Latest Grade Submited</th>
            </tr>
            <tr class="openGradesPage" onclick="openGradesPage()">
                <td style="width: 1;"><i class="fas fa-chart-bar"></i></td>
                <td>11-May<br>10:25</td>
                <td>Web Design</td>
                <td><i class="fa-solid fa-angle-right"></i></td>
            </tr>
        </table>
    </div>

    <table class="courseTable">
        <tr>
            <th colspan="5" class="courseHead">Courses</th>
        </tr>
        <tr class="courseRow">
            <td class="CourseDate">IT 240</td>
            <td class="CourseDate">WEB DESIGN</td>
            <td class="CourseDate"> <a href="Posts.php"><button class="custom-button">Classroom</button></a></td>
            <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=IT%20240&syl=1&printable=1" class="custom-link">Syllabus</a></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
        </tr>



        <tr>
            <td class="CourseDate">IT 218</td>
            <td class="CourseDate">PROBABILITY & STATISTICS</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>



        <tr>
            <td class="CourseDate">IT 211</td>
            <td class="CourseDate">DATA STRUCTURES & ALGORITHMS</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>

        <tr>
            <td class="CourseDate">IT 216</td>
            <td class="CourseDate">DATABASE SYSTEMS II</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>



        <tr>
            <td class="CourseDate">IT 212</td>
            <td class="CourseDate">OBJECT ORIENTED PROGRAMMING</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=IT%20212&syl=1&printable=1" class="custom-link">Syllabus</a></td></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
        </tr>



        <tr>
            <td class="CourseDate">ELT 270</td>
            <td class="CourseDate">ACADEMIC WRITING SKILLS II</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=ELT%20270&syl=1&printable=1" class="custom-link">Syllabus</a></td></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
        </tr>
        </tr>
    </table>
    </main>
    </body>
@endsection
