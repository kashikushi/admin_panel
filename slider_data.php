<?php

$con=mysqli_connect("localhost","root","","dw_admin");

// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

if(isset($_POST['submit']))
 {
 extract($_POST);

$input = $_REQUEST['title'];
$textarea = $_REQUEST['desc'];

	 
$query="INSERT INTO `aslider1` (`aslider1_title`, `aslider1_desc`) VALUES ('$input','$textarea') ";

if ($con->query($query) === TRUE) {
header("location:index.php");
}
else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>
