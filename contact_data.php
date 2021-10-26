<?php

include_once 'connection.php';

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$address = $_POST['email'];
	$marks = $_POST['message'];

	$insert ="INSERT INTO contact (username,email,massage) VALUES ('$name','$address','$marks')";

	if(mysqli_query($conn , $insert))
	{
		header('Location: index.php');
	}
	else
	{
		echo "something went wrong";
	}

}

?>