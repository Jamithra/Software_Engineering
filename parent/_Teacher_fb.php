<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');
$name = $_SESSION['username'];
$teacher=$_POST['teacher'];
$fb = $_POST['feedback'];

$q1 = "SELECT * FROM teacher_table WHERE id = '$teacher'";
$result1 = mysqli_query($con,$q1);
$row = mysqli_fetch_array($result1);
$namet=$row['tname'];

$qy=" INSERT INTO tfeedback(feedback,teacher_name,teacher_id) VALUES ('$fb','$namet','$teacher')";
mysqli_query($con,$qy);
header('location:Teacher_fb.php');

/*
if($row["username"]==$name && $row["password"]==$pass){
	header('location:Adminhome.php');
    //echo"You are a validated user.";
//$_SESSION['username']=$name;

}
   
else
    echo"Sorry, your credentials are not valid, Please try again.";
    header('location:Adminlogin.php');
*/
?>
