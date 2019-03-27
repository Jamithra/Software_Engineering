<?php
session_start();
// Grab User submitted information
// Connect to the database
$con = mysqli_connect("localhost","root");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}


// Select the database to use
mysqli_select_db($con,'school_management_system');


$name = $_POST["username"];
$pass = $_POST['password'];


$q = "SELECT * FROM admin_table WHERE username = '$name' && password = '$pass' ";
$result = mysqli_query($con,$q);
//$result = mysql_query("SELECT username, password FROM admintable WHERE username = "$user" );

$row = mysqli_fetch_array($result);

if($row["username"]==$name && $row["password"]==$pass){
	header('location:Adminhome.php');
    //echo"You are a validated user.";
//$_SESSION['username']=$name;

}
   
else
    echo"Sorry, your credentials are not valid, Please try again.";
    //header('location:Adminlogin.php');

?>
