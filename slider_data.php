<?php

$msg = "";

//if the button is pressed
if(isset($_POST['submit']))
	
	$folder = "images2/";
	$target = $folder.basename ($_FILES['file']['name']);

//connection to db
	$con=mysqli_connect("localhost","root","","dw_admin");

//get all the submitted data from form

			$image = $_FILES['file']['name'];
			$input = $_REQUEST['title'];
			$textarea = $_REQUEST['txtarea'];
			$query = "INSERT INTO `aslider1` (`aslider1_title`, `aslider1_desc`, `aslider1_img` ) VALUES ('$input','$textarea','$image')  ";
			$sql=mysqli_query($con,$query); //store submitted data on database table : aslider1
// move submitted image to folder: images2
		if (move_uploaded_file($_FILES['file']['tmp_name'], $target))
		{
$msg = "image uploaded successfully";
} else {
			$msg = "there was a problem uploading image";
		}

//echo "<br> <a href='slider.php'> Go back </a> ";
//header( "refresh:0;url=slider.php")
 ?>
