<?php
session_start();
$con = mysqli_connect("localhost","root");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');

$tename = $_POST['tname'];
$mobile = $_POST['tmobile'];
$email = $_POST['temail'];
$q = $_POST['tqualification'];
$course = $_POST['tcourse'];



	$qy="INSERT INTO teacher_table (tname,tmobile,temail,tqualification,tcourse) VALUES ('$tename' , '$mobile' , '$email' , '$q' , '$course')";
	mysqli_query($con,$qy);
	echo $con->error;
	//echo "New teacher added";
	header('location:Adminhome.php');

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
