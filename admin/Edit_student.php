<?php 
  session_start();
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
ul{
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 3px solid #2e8b57 ;
    background-color: #f3f3f3;
}
li {
    float: left;
    width:11%;
    font-size:20px;
    color:#2e8b57;}
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
  font-size:20px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
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
</style>
</head>
<body>
<div class="container">
<img src="image.jpeg" alt="Norway" height="330" width="100%">
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

<?php
$std_id=$_GET["student_id"];
#echo $std_id;
            
?>
<br>

<?php
            #include "../sql_access.php";
			
			include_once 'server.php';
			mysqli_select_db($con,'school_management_system');
            #$schl_id=$_SESSION['student_id'];
			$std_id=$_GET['student_id'];
           # echo $std_id;
        

            $retval="SELECT * FROM student_table where sid='$std_id'";
            $studet=mysqli_query($con,$retval);
            if(! $studet ) {
                   die('Could not get data: ' . mysqli_error($con));
                }
            $data = mysqli_fetch_array($studet);
            $p=$data['sname'];

		$name = htmlspecialchars($data['sname'],ENT_QUOTES);
        $phone = htmlspecialchars($data['sphone'],ENT_QUOTES);
        $parent = htmlspecialchars($data['sparent'],ENT_QUOTES);
        $clas = htmlspecialchars($data['sclass'],ENT_QUOTES);
        $email = htmlspecialchars($data['sparent_email'],ENT_QUOTES);
        $passwd=htmlspecialchars($data['spassword'],ENT_QUOTES);
        #echo $p;
            

echo
'<div class="container3">
<form method="post" action="">
<div class="container1">
<h2 class="heading"><b>EDIT STUDENT</b></h2>
<div class="row">
      <div class="col-25">
        <label for="studentname">Student-Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="studentname" name="sname" value='.$name.' placeholder=" Enter Student Name" required />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="studentcourse">Class</label>
      </div>
      <div class="col-75">
        <input type="text" id="studentcourse" name="scourse" value='.$clas.' placeholder="Enter Class" required />
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="studentphone">Mobile-No</label>
      </div>
      <div class="col-75">
        <input type="text" id="studentphone" name="sphone" value='.$phone.' placeholder="Enter Mobile-no" required />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="studentparent">Parent-Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="studentparent" name="sparent" value='.$parent.' placeholder="Enter Parent-name" required />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="parentemail">Parent-Emailid</label>
      </div>
      <div class="col-75">
        <input type="text" id="parentemail" name="sparentemail" value='.$email.' placeholder="Enter Parents Email-id" required />
      </div>
    </div>
    

    <button type="submit" name="submit">EDIT Student</button>
</div>
  </form>

</div>';

if(isset($_POST['submit']))
        {
            $name=$_POST['sname'];
            $clas=$_POST['scourse'];
            $phone=$_POST['sphone'];
            $parent=$_POST['sparent'];
            $email=$_POST['sparentemail'];
            $std_id=$_GET["student_id"];

            $sql="update student_table set sname='$name', sphone=$phone, sclass='$clas', sparent='$parent', sparent_email='$email' where sid='$std_id'";
            $retval=mysqli_query($con,$sql);

            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($con));
            }
            echo "Updated data successfully\n";

            echo "<script> location.href='View_student.php'; </script>";
            exit;
        }

    ?>


?>


 </body>
</html>


