<?php

session_start();


include_once 'connection.php';
if(isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysqli_query($conn , "SELECT * FROM profile WHERE username = '".$user."' AND password = '".$pass."' ");
    if(mysqli_num_rows($sql)==1)
    {

        $_SESSION['username']=$user;
        header('Location: Profile.php');
    }
    else
    {
        
echo '
<script>
alert("Check User Name and Password");
window.location.href="login.php";
</script>

';
        
    }
}
?>