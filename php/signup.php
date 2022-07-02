<html>
    <head>
        <title> SIGN UP | LEARNER'S LICENSE HELPER </title>
        <link rel="stylesheet" href="s../css/ignup.css">
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
            <marquee behavior="alternate"> <span> <img src="../images/signin.png"> LEARNER'S LICENSE HELPER <img src="../images/signin.png"> </span> </marquee>
    </header>
    <div class="container">
        <form method="post"> 
            <input type = "text" placeholder = "Name" name = "nm" required>
            <input type = "date" placeholder = "D.O.B" name = "dob" required>
            <input type = "email" placeholder = "E-Mail" name = "email" required>
            <input type ="text" placeholder = "Username" name = "usr" required>
            <input type = "password" placeholder = "Password" name = "pwd" minlength="5" maxlength="10" required>
            <input type = "password" placeholder = "Re Enter Password" name = "pwd1" minlength="5" maxlength="10" required>
            <div class="buttons">
                <input type = "submit" name="signup" value = "Sign Up">
                &nbsp;
                <button><a href="signin.php">Sign In</a></button>
            </div>
        </form>
    </div>
<?php
error_reporting(0);
$name=$_POST['nm'];
$dob=$_POST['dob'];
$user=$_POST['usr'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];
$email=$_POST['email'];
$today=time();
$bday=strtotime($dob);
if(isset($_POST["signup"])) {
$diff=(int)(($today-$bday)/31536000);
if($diff<16) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error\nYour age is below 16. Hence, not permitted to register.");}
</script>';
}
else if($pwd!=$pwd1) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error\nPasswords does not match. Enter again");}
</script>';
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error\nEmail is not valid. Hence, not permitted to register.");}
    </script>';
}
else {
$servername = "localhost";
$username = "root";
$dbname="LearnerLicense";
$conn = new mysqli($servername, $username,"", $dbname);
if($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql= "SELECT * FROM Users WHERE Username='".$user."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error....\nUsername already exists. Try another");}
</script>';
}
else {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Success\nYou are successfully signed up");}
</script>';
$sql = "INSERT INTO Users VALUES ( '".$name."','".$dob."','".$email."','".$user."','".$pwd."')";
echo mysqli_query($conn, $sql);
mysqli_close($conn);
}
}
}
?>
</body>
</html>
