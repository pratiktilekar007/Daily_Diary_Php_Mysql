<?php
session_start();
include_once 'connection.php';

$id = $_GET  ['id'];

$delete = "DELETE FROM profile WHERE id = '".$id."'";

if(mysqli_query($conn , $delete))
{
	session_unset();
	header('Location: index.php');
}
else
{
	echo "Error :";
}


?>