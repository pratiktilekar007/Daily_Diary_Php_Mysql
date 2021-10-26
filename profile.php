<?php

session_start();
error_reporting(0);
include_once 'connection.php';
$userprofile = $_SESSION['username'];

if($userprofile == true)
{

}
else
{
    header('location: login.php');
}
$sql = mysqli_query($conn , "SELECT * FROM profile WHERE username = '".$userprofile."' ");

$result = mysqli_fetch_assoc($sql);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>daily_diary</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
    <!--


-->
<script>
    function logout()
    {

        confirm("logout");
    }
</script>
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">Daily Diary</h1>

                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="Profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a  onClick="javascript: return confirm('Please confirm logout');" class="nav-link tm-nav-link"  href="logout.php" >Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>


        </div>


        <div>
            <center>



            





            <div class="tm-row">
                <div class="tm-col-left">

                <br>
                
                <h1>Your Profile</h1>
                <br>

                <img src="<?php echo 'upload/'.$result['image']; ?>" class="rounded-circle" height="200px" width="200px" >
<br><br>
<h4>  Name :   <?php  echo $result ['name']; ?> </h4>
<br>
<h4>  Address :   <?php echo $result ['address'];?> </h4>
<br>
<h4>  Contact No :  <?php echo $result ['mobileno']; ?> </h4>
<br>
<h4>  Email :   <?php echo $result ['email'];?> </h4>


<?php $_SESSION['user_id'] = $result['id'];  ?>
<br>

<a href="updateprofile.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Update Profile</a>



<br><br>
<br><br>
                </div>
                <main class="tm-col-right">
                    <section class="tm-content">
                       <br><br>
                       
                        <hr class="mb-5">
                                            
                        <a href="writediary.php" class="btn btn-primary">Write Diary</a>
                        <hr class="mb-5">

                        <a href="viewdiary.php" class="btn btn-primary">View Diary</a>
                        <hr class="mb-5">
                        
                        <a onClick="javascript: return confirm('Please confirm to logout');" href="logout.php" class="btn btn-primary">Logout</a>
                        <hr class="mb-5">
                        <a onClick="javascript: return confirm('Please confirm to Delete Account');" href="delete.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Delete</a>
                        <hr class="mb-5">

                        
                    </section>
                </main>
            </div>
            
            








            </center>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                      </footer>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>