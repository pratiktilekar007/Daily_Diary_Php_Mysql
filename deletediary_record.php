<?php

include_once 'connection.php';

$id = $_GET['id'];

$delete = "DELETE FROM data WHERE id = '".$id."' ";

if(mysqli_query($conn , $delete))
{
	header('Location: viewdiary.php');
}
else
{
	echo "Error :";
}

?>