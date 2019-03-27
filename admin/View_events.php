<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');
$q = "SELECT * FROM events";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<style>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
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
<img src="image.jpeg" alt="Norway" height="330" width="100%">
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

<h2 class="heading">Events/Notices</h2>

<table>
 <col width="10">
  <col width="200">
  <tr>
  <th>S.No</th>
  <th>Date</th>
  <th>Events/Notices</th>

    
  </tr>
<?php 
$q = "SELECT * FROM events";
$result = mysqli_query($con,$q);

while($row = mysqli_fetch_assoc($result)){
$s=$row['event'];
$d=$row['date'];
$i=$row['id'];
?>

<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo "$d"; ?></td>
<td><?php echo "$s"; ?></td>    
</tr>

<?php } ?>
   
</table>
</body>
</html>

