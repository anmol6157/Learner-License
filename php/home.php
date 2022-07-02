<html>
    <head> 
        <title> HOME | LEARNER'S LICENSE HELPER </title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Rampart+One&display=swap" rel="stylesheet">
    </head> 
    <body>
    <p id="logout"> <a href="signin.php" target="_top"> LOG-OUT </a> &emsp; </p>
        <header>
            <img src="../images/mrth.jpg">
            <marquee behavior="alternate"> <span> LEARNER'S LICENSE HELPER </span> </marquee>
        </header>
        <div class="menu-container">
            <div class="option-container">
                <img src="../images/procedure.jpg">
                <button><a href="application.html"> Application Procedure </a> </button>
                <p> Eligibility Criteria, Application Form Details, Documents Required, Application Process etc </p>
            </div>
            <div class="option-container">
                <img src="../images/questionbank.jpg">
                <button><a href="questionbank.html"> Questions Bank </a> </button>
                <p> Traffic Signs and QnA to prepare for Learner's License Exam </p>
            </div>
            <div class="option-container">
                <img src="../images/mock_exam.jpg">
                <?php
                    error_reporting(0);
                    $files = array('exam1.php','exam2.php','exam3.php');
                    $index = array_rand($files);
                    echo '<button><a href='.$files[$index].' target="_blank" onClick="myFunction()"> Mock Exam </a> </button>';
                    echo '<script>';
                    echo 'function myFunction() { location.reload(); }';
                    echo '</script>';
                ?>
                <p> A virtual exam with same format and time constraint as of real MCQ exam conducted by License Authority</p>
            </div>
            <div class="option-container">
                <img src="../images/apply-here.jpg">
                <button><a href="https://sarathi.parivahan.gov.in/sarathiservice/stateSelection.do"> Apply Online </a> </button>
                <p> Visit the official website of Ministry of Road Transport and Highways and apply for Learner's License online </p>
            </div>
        </div>
        </body>
</html>

