<?php
session_start();
include_once 'server.php';
mysqli_select_db($con,'school_management_system');
$con = mysqli_connect("localhost","root");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');
$sname = $_SESSION["username"];
$q = "SELECT * FROM student_table WHERE sname = '$sname'";
$result = mysqli_query($con,$q);
//$result = mysql_query("SELECT username, password FROM admintable WHERE username = "$user" );
$row = mysqli_fetch_array($result);
$course=$row['scourse'];
$q = "SELECT * FROM teacher_table WHERE tcourse = '$course'";
$result = mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
$tname=$row['tname'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<style>
body {background-color: #ffdead;  
  top:0;
  left:0;
  right:0;
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
    background-color: #f3f3f3;}
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
button {
    background-color: #2e8b57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}
button:hover {
    background-color: white; /* Green */
    color:#4CAF50;  
}
/* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:#2e8b57;
  font-size:25px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding:40px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;

}

/* Style the container */
.container1 {
  border: 3px solid #2e8b57 ;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  height:100px;
  box-sizing: border-box; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.container3{
  padding:20px;
}
.heading{
  text-align:center;
  font-family: Arial, Helvetica, sans-serif;
  font-size:30px;
  color:#2e8b57 ;
}

.dropdown-content {
    display: none;
    
}

.dropdown:hover .dropdown-content {
    display: block;
}
.container2{
	border:2px solid #2e8b57 ;
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


<div class="container3">
<form method="post" action="_Teacher_fb.php">
<div class="container1">
<h2 class="heading"><b>Teacher Feedback</b></h2>

<div class="container">
      <div class="row">
      <div class="col-25">
        <label for="sfb">Teacher Name : </label>
      </div>
      <div class="col-75">
      <select name="teacher" size="1" id="teacher" onChange="day(this.value)">
      <option type="text" value="">Select Teacher</option>
<?php 
session_start();

$con = mysqli_connect("localhost","root");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
// Select the database to use
mysqli_select_db($con,'school_management_system');
      $qry="select * from teacher_table";

      $result=mysqli_query($con, $qry);
      if($result)
      {
        while($row=mysqli_fetch_row($result))
        {
          print "<option type='text' value='".$row[0]."'>".$row[1]."</option>";
        }
      }
      else
      {
        print mysqli_error($con);
      }
      ?>
      </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="sfb">Enter Feedback : </label>
      </div>
      <div class="col-75">
        <input type="text" id="sfb" name="feedback" placeholder="Enter Feedback" required />
      </div>
    </div>
   

    <button type="submit">SUBMIT</button>
</div>
  </form>

</div>

 </body>
</html>

