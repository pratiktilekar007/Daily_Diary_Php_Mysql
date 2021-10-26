<?php

include_once 'connection.php';

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
	$tital = $_POST['tital'];
	$message = $_POST['message'];
    


	$sql = "UPDATE data SET tital = '".$tital."' ,content= '".$message."'  WHERE id = '".$id."' ";

	if(mysqli_query($conn , $sql))
	{
		
		header('Location: viewdiary.php');
	}
	else
	{
		echo "Error :";
		echo $sql;
	}
}

?>