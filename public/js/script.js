function toggleDarkMode() {
    if (localStorage.getItem('darkMode') === 'enabled') {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
}

// Function to enable dark mode
function enableDarkMode() {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'enabled'); // Store dark mode preference
}

// Function to disable dark mode
function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', 'disabled'); // Store dark mode preference
}

// Initialize dark mode based on user preference
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('darkMode') === 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
});

function openAnnouncementPage() {
    window.location.href = "announcements";
    // Function to toggle dark mode
    function toggleDarkMode() {
        if (localStorage.getItem('darkMode') === 'enabled') {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    }

// Check if dark mode preference is stored in localStorage
    if (localStorage.getItem('darkMode') === 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }

    function enableDarkMode() {
        document.body.classList.add('dark-mode');
        localStorage.setItem('darkMode', 'enabled');
    }

    function disableDarkMode() {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('darkMode', 'disabled');
    }

}

function openGradesPage() {
    window.location.href = "grades";
    let previousRow = null;
    let detailsTable = null;

    function showDetails(row, gradeId) {
        if (previousRow !== null && detailsTable !== null) {
            document.body.removeChild(detailsTable);
        }

        fetch(`/grades/${gradeId}`)
            .then(response => response.json())
            .then(data => {
                if (!data) return; // handle case where data is not returned
                const courseName = data.course_name;
                const quizGrade1 = data.quiz1;
                const quizGrade2 = data.quiz2;
                const quizGrade3 = data.quiz3;
                const homeworkGrade = data.homework;
                const participationGrade = data.participation;
                const projectGrade = data.project;
                const midtermGrade = data.midterm;
                const finalExamGrade = data.final_exam;

                const newTable = document.createElement('table');
                newTable.classList.add('details-table');
                const headerRow = newTable.insertRow();
                const courseNameCell = headerRow.insertCell();
                courseNameCell.innerText = courseName;
                courseNameCell.style.padding = '10px';

                const dataRow1 = newTable.insertRow();
                const quizCell = dataRow1.insertCell();
                quizCell.innerText = 'Quiz 1';
                const quizDataCell = dataRow1.insertCell();
                quizDataCell.innerText = quizGrade1;

                const dataRow2 = newTable.insertRow();
                const quizCell2 = dataRow2.insertCell();
                quizCell2.innerText = 'Quiz 2';
                const quizDataCell2 = dataRow2.insertCell();
                quizDataCell2.innerText = quizGrade2;

                const dataRow3 = newTable.insertRow();
                const quizCell3 = dataRow3.insertCell();
                quizCell3.innerText = 'Quiz 3';
                const quizDataCell3 = dataRow3.insertCell();
                quizDataCell3.innerText = quizGrade3;

                const dataRow4 = newTable.insertRow();
                const homeworkCell = dataRow4.insertCell();
                homeworkCell.innerText = 'Homework';
                const homeworkDataCell = dataRow4.insertCell();
                homeworkDataCell.innerText = homeworkGrade;

                const dataRow5 = newTable.insertRow();
                const participationCell = dataRow5.insertCell();
                participationCell.innerText = 'Participation';
                const participationDataCell = dataRow5.insertCell();
                participationDataCell.innerText = participationGrade;

                const dataRow6 = newTable.insertRow();
                const projectCell = dataRow6.insertCell();
                projectCell.innerText = 'Project';
                const projectDataCell = dataRow6.insertCell();
                projectDataCell.innerText = projectGrade;

                const dataRow7 = newTable.insertRow();
                const midtermCell = dataRow7.insertCell();
                midtermCell.innerText = 'Midterm';
                const midtermDataCell = dataRow7.insertCell();
                midtermDataCell.innerText = midtermGrade;

                const dataRow8 = newTable.insertRow();
                const finalExamCell = dataRow8.insertCell();
                finalExamCell.innerText = 'Final Exam';
                const finalExamDataCell = dataRow8.insertCell();
                finalExamDataCell.innerText = finalExamGrade;

                const rect = row.getBoundingClientRect();
                const tableWidth = 500;
                const leftPosition = rect.right + 20;
                const topPosition = gradesTable.getBoundingClientRect().top;
                newTable.style.position = 'absolute';
                newTable.style.left = leftPosition + 'px';
                newTable.style.top = topPosition + 'px';
                newTable.style.width = tableWidth + 'px';

                document.body.appendChild(newTable);

                previousRow = row;
                detailsTable = newTable;
            })
            .catch(error => console.error('Error fetching grade details:', error));
    }
}
