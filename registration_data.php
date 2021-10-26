<?php

session_start();

include_once 'connection.php';

if(isset($_POST['submit']))

{

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
	$file = $_FILES['image'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    // print_r($file);

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0)
    {

        $destfile ="upload/".$filename;

        move_uploaded_file($filepath,$destfile);

        $insertquery = "INSERT INTO profile(name,address,email,mobileno,image,username,password) VALUES ('$name',
        '$address','$email','$mobileno','$filename','$username','$password')";

       
      
        if(mysqli_query($conn, $insertquery))
    {
        $_SESSION['username']=$username;
        header('Location: profile.php');
    }
    else
    {
       echo "something is wrong";
    }
    }
   



}




?>