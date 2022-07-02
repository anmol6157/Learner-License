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
<p> Q1. How can you distinguish a transport vehicle</p>
<input type="radio" name="a" value="A"> By looking at the tyre size <br>
<input type="radio" name="a" value="B"> By colour of the vehicle <br>
<input type="radio" name="a" value="C"> By looking at the number plate of the vehicle <br>
</div>
<div class="section">
<p> Q2. Maximum permissible speed of autorickshaws on ghat road </p>
<input type="radio" name="b" value="A"> 30 km/hour <br>
<input type="radio" name="b" value="B"> 20 km/hour <br>
<input type="radio" name="b" value="C"> 40 km/hour <br>
</div>
<div class="section">
<p> Q3.The following sign represents </p>
<img src="../images/Steep_descent.svg" >
<input type="radio" name="c" value="A"> Steep ascend  <br>
<input type="radio" name="c" value="B"> Steep descend <br>
<input type="radio" name="c" value="C"> Slippery road <br>
</div>
<div class="section">
<p> Q4. The following sign represents </p>
<img src="../images/fallingrocks.png" >
<input type="radio" name="d" value="A"> Rough road  <br>
<input type="radio" name="d" value="B"> Slippery road <br>
<input type="radio" name="d" value="C"> Falling rocks <br>
</div>
<div class="section">
<p> Q5. A flashy yellow signal is used means </p>
<input type="radio" name="e" value="A"> traffic lights aren't working <br>
<input type="radio" name="e" value="B"> you should slow down and proceed with caution <br>
<input type="radio" name="e" value="C"> men are at work <br>
</div>
<div class="section">
<p> Q6. The following sign represents </p>
<img src="../images/school-ahead.jpg" >
<input type="radio" name="f" value="A"> School Ahead <br>
<input type="radio" name="f" value="B"> Pedestrians crossing <br>
<input type="radio" name="f" value="C"> Pedestrians crossing prohibited <br>
</div>
<div class="section">
<p> Q7. Minimum age for getting a license to drive motor cycle without gear</p>
<input type="radio" name="g" value="A"> 18 years <br>
<input type="radio" name="g" value="B"> 21 years <br>
<input type="radio" name="g" value="C"> 16 years <br>
</div>
<div class="section">
<p> Q8. The following sign represents </p>
<img src="../images/leftrevbend.jpg" >
<input type="radio" name="h" value="A"> Righr reverse bend <br>
<input type="radio" name="h" value="B"> Left reverse band <br>
<input type="radio" name="h" value="C"> Turn left and go ahead <br>
</div>
<div class="section">
<p> Q9. The following sign represents </p>
<img src="../images/slippery-road.jpg" >
<input type="radio" name="i" value="A"> Slippery road <br>
<input type="radio" name="i" value="B"> Gravel road <br>
<input type="radio" name="i" value="C"> No entry for motor car <br>
</div>
<div class="section">
<p> Q10. What is "Tail Gating"? </p>
<input type="radio" name="j" value="A"> Driving too close behind a vehicle in a dangerous manner <br>
<input type="radio" name="j" value="B"> Keeping safe distance from the vehicle ahead regulating the speed proportionality <br>
<input type="radio" name="j" value="C"> keeping a distance of at least 7 metres from the vehicle ahead <br>
</div>
<div class="button">
<input type="submit" name="submit" value="Submit Answers"/>
</div>
</form>
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
$correct = array("C","A","B","C","B","A","C","B","A","A");
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
