<?php
session_start();
$lname= $_SESSION['secondMessage'] ;

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php

if(isset($_POST["Submit2"]))
{
    $epas=$_POST['ename'];
    echo $epas;

$sql = "UPDATE mysystem SET email='$epas' WHERE username='$lname'";

if ($conn->query($sql) === TRUE) {
    
    echo '<script>alert("Successfully updated new email")</script>';
} else {
  echo "Error updating record: " . $conn->error;
}
}
if(isset($_POST["Submit1"]))
{echo "hi";
    $upas=$_POST['uname'];
    echo $upas;

$sql = "UPDATE mysystem SET firstname='$upas' WHERE username='$lname'";

if ($conn->query($sql) === TRUE) {
    
    echo '<script>alert("Successfully updated new firstname")</script>';
} else {
  echo "Error updating record: " . $conn->error;
}
}
if(isset($_POST["Submit4"]))
{
    $sql = "DELETE FROM mysystem WHERE username='$lname'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("Location: index.php?");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}
$conn->close();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">

<!-- Core Stylesheet -->
<link rel="stylesheet" href="style.css">
    <!-- Title -->
    <title>My Account</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="account.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                            <ul>
                                    <li><a href="front.php">Home</a></li>
                                    <li><a href="music.php">Music</a>
                                        <ul class="dropdown">
                                            <li><a href="front.php">Home</a></li>
                                            <li><a href="t.php">Tracks</a></li>
                                            <li><a href="trc.php">Artists</a></li>
                                            <li><a href="genres.php">Genres</a></li>
                                            <li><a href="char.php">Charts</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="char.php">Charts</a></li>
                                    <li><a href="concert-tours.php">Concerts</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="index.php">Logout</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="ac.php"><i  aria-hidden="true"><?php echo $lname; ?></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>My Account</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="summary">
        <div class="summary-card">
            <div class="summary-single">
                <span></span>
                <div>
                    <form method="post">
                    <h5 style="font-size: 35px; margin-top: 100px; margin-left: 500px; font-weight: bold; color: purple;">Firstname : </h5>
                    <input type="label" name="uname" style="font-size: 25px; margin-left: 500px; font-weight: bold; color: salmon;" placeholder="Firstname"></small>
                    <button type="submit" name="Submit1" style="margin-left: 200px; background-color:  salmon;   border: none; padding: 10px 10px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 350px;" >Edit Username</button>
</form>  </div>
            </div>
            <div class="summary-single">
                <span ></span>
                <div>
                    <form method="post">
                    <h5 style="font-size: 35px;  margin-left: 500px; font-weight: bold; color: purple;">Email-id :</h5>
                    <input type="label" name="ename" style="font-size: 25px; margin-left: 500px; font-weight: bold; color: salmon;" placeholder="example@gmail.com"></small>
                    <button type="submit" name="Submit2" style="margin-left: 200px; background-color:  salmon;   border: none; padding: 10px 10px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 350px;" >Change Email</button>
</form>  </div>
            </div>
            <div class="summary-single">
                <span ></span>
                <div>
                    <form method="post"> 
                    <h5 style="font-size: 20px;  margin-left: 500px; margin-top: 100px; color: black;">No longer need your account?</h5>
                    
                    <button type="submit" name="Submit4" style="margin-left: 200px; background-color:  rgb(241, 41, 19);   border: none; padding: 5px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 500px;" >Delete Account</button>
                </div>
                <form>
            </div>
            
        </div>
        
        </div>
    </div>
    <!-- ##### Blog Area Start ##### -->

       

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->


                <!-- Footer Widget Area -->


                <!-- Footer Widget Area -->


                <!-- Footer Widget Area -->
                <div>
                    <div>
                        <div class="widget-title">
                            <span style="font-size: 20px;">Be a part of this mind-boggling world of music for an amazing
                                music experience.</span>
                        </div>
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<?php
session_start();

$message1 = "WELCOME" ;
$message2 = $lname;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
?>