 <?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$conn = new mysqli($servername, $username, "");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS LearnerLicense";
$conn->query($sql);
$sql= "USE LearnerLicense";
$conn->query($sql);
$sql= "CREATE TABLE IF NOT EXISTS Users(Name varchar(50) not null, DOB date not null, Email varchar(50) not null,Username varchar(50) primary key not null,Password varchar(50) not null)";
$conn->query($sql);
$conn->close();
?>