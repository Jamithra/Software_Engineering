<?php
session_start();
include_once 'server.php';
mysqli_select_db($con,'school_management_system');
//echo $_SESSION['username'];
$q1="SELECT * FROM student_table";
$result1=mysqli_query($con,$q1);
$num = mysqli_num_rows($result1);
$a=1;
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<style>
body {background-color: #ffdead;  
}
.centered {
  text-align:center;
  font-family: Arial, Helvetica, sans-serif;
  font-size:31px;
    color:#ffdead;
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.container {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    list-style-type: none;
    overflow: hidden;
    background-color: #f3f3f3;
}
.container2{
  border-style: solid;
    border-width: 2px;
    border-color:#2e8b57;
}

.heading{
  text-align:center;
  font-family: Arial, Helvetica, sans-serif;
  color:#2e8b57;
}


.classadmin{
  text-align:center;
  padding:0px;
  font-family: Arial, Helvetica, sans-serif;
  color:#2e8b57;
  font-size:25px; 
}
ul {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;

    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
    width:12.5%;
    font-size:20px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
   color: #666;
    text-decoration: none;
}

li a:hover {
  color:white;
    background-color:#2e8b57 ;
}

.dropdown-content {
    display: none;
    
}

.dropdown:hover .dropdown-content {
    display: block;
}
table {
  max-width: 1300px;
    margin: auto;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

th,td {
    border: 2px solid #2e8b57;
    text-align: left;
    padding: 8px;
}



tr:nth-child(even) {
    background-color: #dddddd;
}


</style>
</head>
<body>

<div class="container">
<img src="image.png" alt="Norway" height="330" width="100%">
<div class="centered" ><b>SCHOOL MANAGEMENT SYSTEM</b></div>
</div>

 
<div class="container2">
<ul>
  
  <li><a href="Add_teacher.php">Add Teacher</a></li>
  <li><a href="Add_course.php">Add Course</a></li>
  <li><a href="Add_student.php">Add Student</a></li>
  <div class="dropdown">
  <li><a class="dropdown" href="#">View/Edit Details</a>
  <ul>
  <div class="dropdown-content">
      <a href="View_student.php">Student Details</a>
      <a href="View_teacher.php">Teacher Details</a>
      <a href="View_course.php">Course Details</a>
      </div>
  </ul>
  </li>
  </div>
  
  <div class="dropdown">
  <li><a class="dropdown" href="#">View Feedback</a>
  <ul>
  <div class="dropdown-content">
      <a href="View_feedbackt.php">about teacher</a>
      
      </div>
  </ul>
  </li>
  </div>
  <li><a href="View_suggestions.php">View suggestions</a></li>
  <li><a href="Upload_events.php">Upload Events</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="classadmin"><b><h3>Student details</h3></b></div>

<table>
 <col width="10">
  <col width="20">
   <col width="20">
    <col width="20">
     <col width="20">
     <col width="20">
<col width="20">
<col width="20">


  <tr>
  <th>S.No</th>
    <th>Student Name</th>
    <th>Course</th>
     <th>Parent Name</th>
     <th>Parent-Mobile</th>
     <th>Parent-Email</th>
     <th>Edit Details</th>
  </tr>

<?php 
$q = "SELECT * FROM student_table";
$result = mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($result)){
$sid=$row['sid'];
$name=$row['sname'];
$P=$row['sparent'];
$m=$row['sphone'];
$pe=$row['sparent_email'];
$c=$row['sclass'];
?>

<tr>
<td><?php echo "$a"; ?></td>
    <td><?php echo "$name"; ?></td>
    <td><?php echo "$c"; ?></td>
    <td><?php echo "$P"; ?></td>
    <td><?php echo "$m"; ?></td>
    <td><?php echo "$pe"; ?></td>
    <!--<td><button type="button">EDIT</button></td>
    <td><form method="get" >
    <button type="submit" name="edit">EDIT</button>
    
</form></td>-->
  <?php echo' <td><a href="Edit_student.php?student_id='.$sid.'"><button type="button" class="btn btn-primary">Edit details</button></a></td>';
?>
  </tr>
<!--
  <?php
#include_once 'server.php';
#IF(ISSET($_POST['edit'])){
#  $_SESSION['student_id'] = $sid;
#  echo "$name";
#echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='Edit_student.php';</script>";

#}
?>
-->

<?php } ?>
   
  </table>

 </body>
</html>

