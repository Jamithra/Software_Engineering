<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');

$name = $_POST['sname'];
$class = $_POST['scourse'];
$phone = $_POST['sphone'];
$parent = $_POST['sparent'];
$parentemail = $_POST['sparentemail'];



$q = "SELECT * FROM student_table WHERE sname = '$name' && sclass = '$class' && sphone = '$phone' && sparent = '$parent' && sparent_emial = '$parentemail' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
	echo "Data already present";
}
else{
	$qy=" INSERT INTO student_table (sname,sclass,sphone,sparent,sparent_email) VALUES ('$name' , '$class' , '$phone' , '$parent' , '$parentemail')";
	mysqli_query($con,$qy);
	//echo "New student added";
	header('location:Adminhome.php');
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
