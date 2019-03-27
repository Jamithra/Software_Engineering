<?php
session_start();
$con = mysqli_connect("localhost","root");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');

$name = $_POST['cname'];
$teacher = $_POST['teacher'];
$sem = $_POST['csemester'];


$q = "SELECT * FROM course_table WHERE cname = '$name' && cteacher = '$teacher' && csemester = '$sem'  ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
	echo "Data already present";
}
else{
	$qy=" INSERT INTO course_table (cname,cteacher,csemester) VALUES ('$name' , '$teacher' , '$sem' )";
	mysqli_query($con,$qy);
	header('location:Adminhome.php');
}

?>
