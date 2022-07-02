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
<p> Q1. You can overtake a vehicle in front</p>
<input type="radio" name="a" value="A"> through the right side of that vehicle<br>
<input type="radio" name="a" value="B"> through the left side<br>
<input type="radio" name="a" value="C"> through the left side; if the road is wide <br>
</div>
<div class="section">
<p> Q2. Mobile phones shall not be used </p>
<input type="radio" name="b" value="A"> in Government offices <br>
<input type="radio" name="b" value="B"> in Police Stations <br>
<input type="radio" name="b" value="C"> while driving a vehicle <br>
</div>
<div class="section">
<p> Q3. The following sign represents </p>
<img src="../images/narrow-road.png">
<input type="radio" name="c" value="A"> Narrow road ahead  <br>
<input type="radio" name="c" value="B"> Narrow bridge ahead <br>
<input type="radio" name="c" value="C"> Roads on both sides ahead <br>
</div>
<div class="section">
<p> Q4. The following sign represents </p>
<img src="../images/no-entry.jpg">
<input type="radio" name="d" value="A"> Restriction ends  <br>
<input type="radio" name="d" value="B"> No entry <br>
<input type="radio" name="d" value="C"> No overtaking <br>
</div>
<div class="section">
<p> Q5. The hand brake is to be used </p>
<input type="radio" name="e" value="A"> to reduce the speed <br>
<input type="radio" name="e" value="B"> to apply sudden brake <br>
<input type="radio" name="e" value="C"> to park a vehicle <br>
</div>
<div class="section">
<p> Q6. The following sign represents </p>
<img src="../images/pedestrian.jpg">
<br>
<input type="radio" name="f" value="A"> Pedestrian crossing <br>
<input type="radio" name="f" value="B"> Pedestrians may enter <br>
<input type="radio" name="f" value="C"> Pedestrians prohibited <br>
</div>
<div class="section">
<p> Q7. Parking of a vehicle in front of entrance to hospital is </p>
<input type="radio" name="g" value="A"> proper <br>
<input type="radio" name="g" value="B"> improper <br>
<input type="radio" name="g" value="C"> proper if NO PARKING sign is not provided <br>
</div>
<div class="section">
<p> Q8. The following sign represents </p>
<img src="../images/give-way.jpg">
<br>
<input type="radio" name="h" value="A"> Traffic island ahead <br>
<input type="radio" name="h" value="B"> Give Way <br>
<input type="radio" name="h" value="C"> Hospital ahead <br>
</div>
<div class="section">
<p> Q9. The following sign represents </p>
<img src="../images/stop.jpg">
<input type="radio" name="i" value="A"> Stop <br>
<input type="radio" name="i" value="B"> No parking <br>
<input type="radio" name="i" value="C"> Hospital ahead<br>
</div>
<div class="section">
<p> Q10. Validity of P.U.C.C. Polution Under Control Certificate </p>
<input type="radio" name="j" value="A"> 6 months <br>
<input type="radio" name="j" value="B"> 1 year <br>
<input type="radio" name="j" value="C"> 2 years <br>
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
$correct = array("A","C","A","B","C","A","B","B","A","A");
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
