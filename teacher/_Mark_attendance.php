<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'admin');
$q = "SELECT * FROM student_table WHERE sname = '$_SESSION[username]' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$attendance=$_SESSION['attendance']+1;
if($num==1){
	$qy=" INSERT INTO student_table (sattendence) VALUES ('$attendance')";
	mysqli_query($con,$qy);
	//echo "New student added";
	header('location:M.php');
}
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
