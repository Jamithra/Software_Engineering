<!DOCTYPE html>
<html lang="en">
<head>
<title>home</title>
<style>
body {
    background-color: #ffdead;
    
    border-color:red;
}


@font-face {
  font-family: 'Arvo';
  font-display: auto;
  src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v9/rC7kKhY-eUDY-ucISTIf5PesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
}


ul {	
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f3f3f3;
}
li {
    float: left;
    width:33%;
    font-size: 18px;
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
    background-color:black ;
    color:white;
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
.container4{
    border-style: solid;
    border-width: 2px;
    border-color:#2e8b57;


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
</style>
</head>
<body>



<div class="container">
<!-- <img src="image.png" alt="Norway" height="350" width="100%"> -->
<div class="centered" ><b>STUDENT PROFILE MANAGEMENT SYSTEM</b></div>
</div>
<div class="container4">
<ul>
  <li style="float:left"><a class="active" href="home.php">Home</a></li>
  <li><a href="Aboutus.php">About us</a></li>
  <li><a href="contact.php">Contact us</a></li>
</ul>
</div>
<p>
<h1>Geetanjali Olympiad Schools </h1><h2>Affiliated to CBSE</h2><h2> Pragathi Nagar located in Mangalore, Karnataka, Pincode : 575025 </h2>
<h2>Contact Number:040-63527167</h2>
</p>
</body>
</html>

