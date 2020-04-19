<?php

/* For my local pc */
$con =  mysqli_connect("localhost","root","") or die("I cannot connect to the database because : ".mysql_error());
mysqli_select_db($con,'medlogin');

?>