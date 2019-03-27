<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');


$email = $_SESSION['username'];
$sname=$_POST['name'];
$srno=$_POST['rollno'];
$su = $_POST['suggestion'];


$q="SELECT tname FROM teacher_table WHERE temail='$email'";
$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
$tname=$row['tname'];
	$qy=" INSERT INTO complaints (names,ids,complaint,tname) VALUES ('$sname' , '$srno' , '$su','$tname')";
	mysqli_query($con,$qy);
	header('location:Give_complaints.php');

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
