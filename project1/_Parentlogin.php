<?php
session_start();
$con = mysqli_connect("localhost","root");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


// Select the database to use
mysqli_select_db($con,'school_management_system');


$name = $_POST["username"];
$pass = $_POST['password'];


$q = "SELECT * FROM student_table WHERE sparent_email = '$name' and spassword = '$pass' ";
$result = mysqli_query($con,$q);
//$result = mysql_query("SELECT username, password FROM admintable WHERE username = "$user" );

$row = mysqli_fetch_array($result);

if($row["sparent_email"]==$name && $row["spassword"]==$pass){
	$_SESSION['username']=$row["sparent_email"];
	header('location:Parenthome.php');
    //echo"You are a validated user.";
}
   
else
    echo"Sorry, your credentials are not valid, Please try again.";
    //header('location:Adminlogin.php');

?>
