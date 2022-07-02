<html>
    <head> 
        <title> SIGN IN | LEARNER'S LICENSE HELPER </title>
        <link rel="stylesheet" href="../css/signin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Rampart+One&display=swap" rel="stylesheet">
    </head> 
    <body>
        <header>
            <img src="../images/mrth.jpg">
            <marquee behavior="alternate"> <img src="../images/signin.png"> LEARNER'S LICENSE HELPER <img src="../images/signin.png"> </marquee>
        <p> Learning to drive gives many a hard experience. A driving license is a mandatory document issued by the Government of India to allow a vehicle owner to operate his vehicle on roads. This website helps to procure a learner's license in an easy way.
It contains information for applying to a learner's license such as documents required, eligibility criteria, etc. It not only provides information,  but also helps you prepare for it by providing practice questions and conducting mock exams similar to the MCQ exam conducted by License Authorities.
An individual can also apply for the learner's license through this website as user can visit to the government's official license application website. </p>
        </header>
        <div class="container">
		    <form method="post">
			    <input type="text" placeholder="Username" name="usr" required/>
			    <input type="password" placeholder="Password" name="pwd" required/>
			    <a href="#">Forgot your password?</a>
                <div class="buttons">
			        <input type="submit" name="signin" value="Sign In">
                    &nbsp;
                    <button><a href="signup.php">Sign Up</a></button>
                </div>
            </form>
        </div>
    <?php
        error_reporting(0);
        $user = $_POST['usr'];
        $pwd = $_POST['pwd'];
        if(isset($_POST["signin"])) {
            $servername = "localhost";
            $username = "root";
            $dbname="LearnerLicense";
            $conn = new mysqli($servername, $username, "", $dbname);
            if($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);
            $sql = "SELECT * FROM Users WHERE Username='".$user."' AND Password='".$pwd."'";
            $result = $conn->query($sql);
            $result=$conn->query($sql);
            if($result->num_rows == 0) {
                echo '<script type="text/javascript"> window.onload=function() { alert("Signin Error\nUsername or Password is wrong");} </script>';
            }
            else {
                header( "Location:home.php" );
            }
            mysqli_close($conn);
        }
    ?>
    </body>
</html>
