<?php session_start();

include_once 'connection.php';

$user_id = $_SESSION['user_id'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dialy Diary</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
    <!--


-->
    <style>
        .btn {

            padding: 10px;

        }

        .tm-col-right {
            z-index: 1;
        }

        
    </style>

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
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="logout.php">Logout</a>
                                </li> 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>


        </div>
        <div>



        </div>


        <div>
            <div class="container">
                <div class="row" style="margin-bottom: 100px;">
                    <?php

                    if ($_SESSION['username']) {
                        $data = mysqli_query($conn, "SELECT * FROM data where user_id='$user_id' ");

                        if (mysqli_num_rows($data) > 0) {
                            foreach ($data as $key) {

                    ?>

                                <div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
                                    <div class="card">

                                        <div class="card-body text-center">


                                            <!-- <h1 class="card-title text-dark" > <?php echo $key['id']; ?></h1> -->

                                            <h5 class="card-title text-dark"><?php echo $key['date']; ?></h3>
                                                <h4 class="card-title text-dark"> <?php echo $key['tital']; ?></h4>
                                                <p class="card-title text-dark"> <?php echo substr($key['content'], 0, 50) . '...';
                                                                                    $key['content']; ?> <a href="viewdiary_content.php?id=<?php echo $key['id']; ?>">Read more</a> </p>
                                                <!-- <h5 class="card-title text-dark"><?php echo $key['date']; ?></h5> -->
                                                <p class="card-text text-dark">
                                                    <!-- <?php echo $key['content']; ?> -->



                                                    <a href="updatediary_content.php?id=<?php echo $key['id']; ?>" class="my-2 btn btn-info btn-sm  text-white rounded "><i class="fas fa-pencil-alt"></i> Update</a>

                                                    <a onClick="javascript: return confirm('Please confirm deletion');" href="deletediary_record.php?id=<?php echo $key['id']; ?>" class="my-2 btn btn-danger btn-sm  text-white rounded "><i class="fas fa-trash-alt"></i> Delete</a>



                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                            echo ' <div class="container">
                                <div class="row" style="margin-bottom: 100px;">
                                <div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
                                <div class="card">

                                    <div class="card-body text-center">


                                        <!-- <h1 class="card-title text-dark" > </h1> -->

                                        <h5 class="card-title text-dark"></h3>
                                            <h4 class="card-title text-dark"> </h4>
                                            <p class="card-title text-dark">  <h3 class="card-title text-dark" >No Data Found</h3> </p>
                                            <!-- <h5 class="card-title text-dark"></h5> -->
                                            <p class="card-text text-dark">
                                                <!--  -->



                                                <a href="writediary.php" class="my-2 btn btn-info btn-sm  text-white rounded "><i class="fas fa-pencil-alt"></i> Write Diary</a>

                                              


                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                  
                                ';
                        }

                        ?>

                </div>

            </div>
        <?php


                    }
        ?>



        <center> <a href="profile.php"><input type="submit" name="submit" value="profile" class="btn btn-big btn-primary text-center"></a> </center>
        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>\
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                </footer>
            </div>
        </div>




        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/templatemo-script.js"></script>
</body>

</html>