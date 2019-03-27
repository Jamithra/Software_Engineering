<?php

$con = mysqli_connect("localhost","root");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}


// Select the database to use
mysqli_select_db($con,'school_management_system');

?>