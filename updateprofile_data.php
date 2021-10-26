<?php

include_once 'connection.php';

if(isset($_POST['submit']))
{
  $id = $_POST['id'];
	$name = $_POST['name1'];
	$address = $_POST['address1'];
	$image = $_FILES['new_image']['name'];
	$target="upload/".basename($_FILES['new_image']['name']);
	$email = $_POST['email1'];
  $mobileno =$_POST['mobileno1'];
  
  

 
	$sql = "UPDATE profile SET name = '".$name."' , address = '".$address."' , email = '".$email."',mobileno = '".$mobileno."',image = '".$image."'
   where   id= '".$id."' ";

  
	if(mysqli_query($conn , $sql))
	{
		move_uploaded_file($_FILES['new_image']['tmp_name'],$target);
		header('Location: profile.php');
	}
	else
	{
		echo "Error :";
	}
}

?>


