<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<style>
#grades {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#grades td, #grades th {
  border: 1px solid #ddd;
  padding: 8px;
}

#grades tr:nth-child(even){background-color: #f2f2f2;}

#grades tr:hover {background-color: #ddd;}

#grades th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #006400;
  color: white;
}
body {background-color: #ffdead;  
}

@font-face {
  font-family: 'Arvo';
  font-display: auto;
  src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v9/rC7kKhY-eUDY-ucISTIf5PesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
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
  padding:30px;
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
    width:16.5%;
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
.container4{
  border:3px solid #2e8b57;
  padding:10px;
  font-style: oblique;
  color:black;
  font-size:15px; 
}
.center{
  text-align:center;
}
</style>

</head>
<body>
<div class="container">
<img src="image.jpeg" alt="Norway" height="350" width="100%">
<div class="centered" ><b>SCHOOL MANAGEMENT SYSTEM</b></div>
</div> 
<div class="container2">
  <ul>
  <div class="dropdown">
  <li><a class="dropdown" href="#">View student reports</a>
  <ul>
  <div class="dropdown-content">
      <a href="View_gradecard.php">Grade card</a>
      <a href="View_attendance.php">Attendance details</a>
      </div>
  </ul>
  </li>
  </div>
  <div class="dropdown">
  <li><a class="dropdown" href="#">Give feedback</a>
  <ul>
  <div class="dropdown-content">
      <a href="Teacher_fb.php">About Teacher</a>
      </div>
  </ul>
  </li>
  </div>
  <li><a href="Give_suggestions.php">Give Suggestions</a></li>
  <li><a href="View_complaints.php">View Complaints</a></li>
  <li><a href="View_events.php">View Events/Notices</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>

<?php
// include "sql_access.php";
// $q = "SELECT p.product_id as id,p.product_name as name, c.no_products as no, p.product_price as p, p.product_offer as offer from cart c inner join product p where p.product_id=c.product_id";
// $result = mysqli_query($connect,$q);
session_start();
include_once 'server.php';

$id=$_SESSION['username'];
$q = "SELECT * FROM student_table WHERE sparent_email = '$id' ";
$result = mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
$sid=$row["sid"];
$sname=$row["sname"];
$parent=$row["sparent"];
$course=$row["sclass"];

 ?>
<div class="container4">

<div class="center"><h2>Student Name : <?php echo "$sname"?></h2></div>



<!-- <div class="center"><h2>Student Half_Yearly Grade: <?php echo "$grade"?></h2></div>
<div class="center"><h2>Student Annual Grade: <?php echo "$grade"?></h2></div> -->

<div >
            <table id="grades">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Course</th>
                  <!-- <th>Half-Yearly Grade</th>
                  <th>Annual Grade</th> -->
                  <th>Attendance %</th>

                  
                </tr>
              </thead>
<tbody>

<?php
$q = "SELECT s.sattendance as sattendance,c.cname as cname FROM student_grades s,course_table c WHERE s.sid = '$sid' and s.course_id=c.id ";
$result = mysqli_query($con,$q);
$no_rows = mysqli_num_rows($result);
$i=0;
if ($no_rows > 0) {
$i=1;
  while($row = mysqli_fetch_assoc($result)) {
    //$pid=$row['id'];
     echo "<tr>";
     echo "<td>".$i."</td>";
     echo "<td>".$row['cname']."</td>";
     echo "<td>".$row["sattendance"]."</td>";
     echo "</tr>";
     
$i=$i+1;
}
}
 ?>
              </tbody>
            </table>
          </div>



</div>

 </body>
</html>

