<html>
<head> 
		<title> MOCK EXAM | LEARNER'S LICENSE HELPER </title>
		<link rel="stylesheet" href="../css/exam.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Rampart+One&display=swap" rel="stylesheet">
		<script type="text/javascript" src="../js/timer.js"></script>
	</head>
<body>
<?php
echo '<script type="text/javascript"> window.onload=function() { alert("IMPORTANT!!!!\n\nNo of questions: 10\nTime alloted: 10 minutes\nEach question carries 1 marks\nNo negative marking\nPassing Marks: >5\n\nNote: This test is created to familiarise you with the Learner License MCQ Exam. It is not exactly same as the real exam conducted by the License Authority.\nClick OK to start your test.");} </script>';
?>
<header>
        <img src="../images/mrth.jpg">
        <marquee behavior="alternate"> <span> LEARNER'S LICENSE HELPER </span> </marquee>
</header>
<h1> Multiple Choice Questions Exam </h1>
<div id="timer">
	<input id="minutes" type="text" readonly> minutes and <input id="seconds" type="text" readonly> seconds
</div>
<form method="post">
<div class="section">
<p> Q1. All motor vehicles must be covered by</p>
<input type="radio" name="a" value="A"> Life Insurance<br>
<input type="radio" name="a" value="B"> Third party Insurance<br>
<input type="radio" name="a" value="C"> Comprehensive Insurance <br>
</div>
<div class="section">
<p> Q2. You hold a learner's license for motor cycle </p>
<input type="radio" name="b" value="A"> You will drive when the traffic is less <br>
<input type="radio" name="b" value="B"> You will drive the vehicle only when an instructor holding driving license to drive motor cycle accompanies <br>
<input type="radio" name="b" value="C"> You will not carry any other person on the motor cycle except for the purpose of getting instructions from an instructor who holds a valid driving license to drive motor cycle<br>
</div>
<div class="section">
<p> Q3. The following sign represents </p>
<img src="../images/light.jpg">
<input type="radio" name="c" value="A"> Light refreshment <br>
<input type="radio" name="c" value="B"> Drinking place <br>
<input type="radio" name="c" value="C"> Eating place <br>
</div>
<div class="section">
<p> Q4. The following sign represents </p>
<img src="../images/resting_place.gif">
<input type="radio" name="d" value="A"> Hospital  <br>
<input type="radio" name="d" value="B"> Resting place <br>
<input type="radio" name="d" value="C"> First aid post <br>
</div>
<div class="section">
<p> Q5. Drunken driving </p>
<input type="radio" name="e" value="A"> Allowed in private motor vehicles <br>
<input type="radio" name="e" value="B"> Allowed during night time <br>
<input type="radio" name="e" value="C"> Prohibited in all motor vehicles <br>
</div>
<div class="section">
<p> Q6. The following sign represents </p>
<img src="../images/petrol.jpg">
<input type="radio" name="f" value="A"> ATM <br>
<input type="radio" name="f" value="B"> Petrol Pump <br>
<input type="radio" name="f" value="C"> Toll Stand <br>
</div>
<div class="section">
<p> Q7. The Driver shall carry the following documents, while driving in public place </p>
<input type="radio" name="g" value="A"> Registration Certificate, G.C.R., Insurance Certificate <br>
<input type="radio" name="g" value="B"> Registration Certificate, Insurance Certificate, Tax Token, Driving License <br>
<input type="radio" name="g" value="C"> Registration Certificate, Permit, Trip Sheet <br>
</div>
<div class="section">
<p> Q8. The following sign represents </p>
<img src="../images/parkingscomot.jpg">
<input type="radio" name="h" value="A"> Parking lot - scooters and motor cycles <br>
<input type="radio" name="h" value="B"> Scooters and motor cycles prohibited <br>
<input type="radio" name="h" value="C"> Scooters and motor cycles repairing <br>
</div>
<div class="section">
<p> Q9. The following sign represents </p>
<img src="../images/firstaid.jpg">
<input type="radio" name="i" value="A"> First aid post <br>
<input type="radio" name="i" value="B"> Resting place <br>
<input type="radio" name="i" value="C"> Hospital<br>
</div>
<div class="section">
<p> Q10. When a vehicle approaches an unguarded railway level crossing, before crossing it, the driver shall </p>
<input type="radio" name="j" value="A"> Stop the vehicle on the left side of the road, get down from the vehicle, go to railway track, and ensure that no train or trolley is coming from either side <br>
<input type="radio" name="j" value="B"> Sound horn and across the track as fast as possible <br>
<input type="radio" name="j" value="C"> Wait till the train passes <br>
</div>
<div class="button">
<input type="submit" name="submit" value="Submit Answers"/>
</div>
</form>
<B>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$result = 0;
$rstatus = " ";
$a1=$_POST['a'];
$a2=$_POST['b'];
$a3=$_POST['c'];
$a4=$_POST['d'];
$a5=$_POST['e'];
$a6=$_POST['f'];
$a7=$_POST['g'];
$a8=$_POST['h'];
$a9=$_POST['i'];
$a10=$_POST['j'];
$answer = array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10);
$correct = array("B","C","A","B","C","B","B","A","A","A");
for($i=0 ; $i < 10 ; $i++)
{
if($answer[$i] == $correct[$i])
$result++;
}
if($result>=6)
$rstatus = "passed";
else
$rstatus = "failed";
echo '<script type="text/javascript"> window.onload=function() { alert("You '.$rstatus.'.\nMarks : '.$result.'/10.");} 
		</script>';
}
?>
</body>
</html>
