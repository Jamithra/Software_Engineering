<?php
session_start();
include_once 'server.php';
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,'school_management_system');


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
    width:14%;
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
table {
  max-width: 500px;
    margin: auto;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

th,td {
    border: 2px solid #2e8b57;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
button {
    background-color: #2e8b57;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    width: 35%;

}
button:hover {
    background-color: white; /* Green */
    color:#4CAF50;  
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 5px 5px;
    margin: 8px 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
</head>
<body>
<div class="container">
<img src="image.jpeg" alt="Norway" height="330" width="100%">
<div class="centered" ><b>STUDENT PROFILE MANAGEMENT SYSTEM</b></div>
</div>
<div class="container2">
  <ul>  
  <li><a href="Mark_attendance.php">Upload Attendance</a></li>
  <li><a href="Mark_grades.php">Mark Grades</a></li>
  <li><a href="View_eventst.php">View Events/Notices</a></li>
<li><a href="View_feedbacktt.php">View my Feedback</a></li>
<li><a href="Give_complaints.php">Give Complaints</a></li>
<li><a href="Give_suggestionst.php">Give Suggestions</a></li>

  <li><a href="logout.php">Logout</a></li>
</ul>

</div>
<div class="classadmin"><b><h3>Upload Attendance%</h3></b></div>

<table>
<col width="5">
 <col width="5">
  <col width="1000">
  <tr>
  <th>S.No</th>
  <th>Student Name</th>
  <th>Upload Attendance%</th>
  <th>Submit</th>
  </tr>
  <form action="" method="post">
<?php 
  $q="SELECT s.sid as sid,s.sname as sname, c.id as cid from student_table s,teacher_table t,course_table c where t.temail='$_SESSION[username]' and c.cteacher=t.id and s.sclass=c.csemester";

  $result = mysqli_query($con,$q);
  $no_rows = mysqli_num_rows($result);

  if ($no_rows > 0) 
  {
    while($row = mysqli_fetch_assoc($result)) 
    {
       echo "<tr>";
       echo "<td>".$row['sid']."</td>";
       echo "<td>".$row["sname"]."</td>";
       echo '<td><input type="text" id="attendance" name="sattendance" placeholder="Percenatge%" required /></td>';
       echo '<td><input name="submit_btn" type="submit" id="submit_btn" value="submit"/></td>';
       echo "</tr>";
       if(isset( $_POST['submit_btn'] ))
       {
          $q2="SELECT * from student_grades where sid='$row[sid]' and course_id='$row[cid]'";
          $result2 = mysqli_query($con,$q2);
          $no_rows2 = mysqli_num_rows($result2);

          if($no_rows2>0){
          $q1="UPDATE student_grades set sattendance='$_POST[sattendance]' where sid='$row[sid]' and course_id='$row[cid]'";
          $result1 = mysqli_query($con,$q1);
          }
          else
          {
          $q1="INSERT into student_grades (sattendance,sid,course_id) values('$_POST[sattendance]','$row[sid]','$row[cid]')";
          $result1 = mysqli_query($con,$q1);
          }
       }
    }
  }
?>
</table>
</form>

</table>
</body>
</html>