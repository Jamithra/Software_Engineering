<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'admin');


$name = $_SESSION['username'];
$fb = $_POST['feedback'];





	$qy=" INSERT INTO feedback (stname,fb) VALUES ('$name' , '$fb')";
	mysqli_query($con,$qy);
	header('location:Student_fb.php');

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
