
<?php

include_once 'connection.php';

if(isset($_POST['submit']))
{
	$user_id = $_POST['user_id'];
	$date = date("Y/m/d");
	$tital = $_POST['tital'];
    $message = $_POST['message'];

	$insert ="INSERT INTO data(user_id,date,tital,content) VALUES ('$user_id','$date','$tital','$message')";

	if(mysqli_query($conn , $insert))
	{
		header('Location: viewdiary.php');
	}
	else
	{
		echo $insert ;
		echo"something went wrong";
	}

}

?>