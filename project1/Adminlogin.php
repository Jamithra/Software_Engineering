<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<style>
body {background-color: #ffdead;  
}
.centered {
	text-align:center;
	font-family: Arial, Helvetica, sans-serif;
    color:#ffdead;
    position: absolute;
    top: 80%;
    left: 50%;
    font-size: 31px;
}

@font-face {
  font-family: 'Arvo';
  font-display: auto;
  src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v9/rC7kKhY-eUDY-ucISTIf5PesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
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
    border-color:#ffdead;
    padding:50px;

}
.button1:hover {
    background-color: white; /* Green */
    color:#4CAF50;	
}
.button1 {
	float:center;
	width:32%;
    background-color: #2e8b57; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
form {
    border: 3px solid #f1f1f1;
    margin:auto;
    width:50%;
    top:0;
   border-color:#2e8b57;
   background-color:#f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #2e8b57;
    box-sizing: border-box;
}
/* Add padding to containers */
.container1 {
    padding: 16px;
    height:200px;
}

/* Set a style for all buttons */
button {
    background-color: #2e8b57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}
.heading{
	text-align:center;
	font-family: Arial, Helvetica, sans-serif;
	color:#2e8b57;
}
label{
	font-family: Arial, Helvetica, sans-serif;
	color:#2e8b57;
}

</style>
</head>
<body>

<div class="container">
<img src="image.jpeg" alt="Norway" height="330" width="100%">
<div class="centered" ><b>SCHOOL MANAGEMENT SYSTEM</b></div>
</div>

<form method="post" action="_Adminlogin.php">
<h2 class="heading"> ADMIN LOGIN FORM </h2>
<div class="container1">
<div>
<label><b>USERNAME</b></label>
<input type="text" placeholder="Enter Username" name="username" required />
</div>
<div>
<label><b>PASSWORD</b></label>
<input type="password" placeholder="Enter Password" name="password" required />
</div>
<button type="submit">Login</button>
</div>

</form>

 </body>
</html>