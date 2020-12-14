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
if(isset($_POST["Submit1"])) {

$name=$_POST['uname'];
echo $name;
$pas=$_POST['psw'];
echo $pas;
echo $name."welcome";
$sql = "SELECT id, firstname, pass FROM mysystem WHERE username='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $res = $row["pass"];
    echo $res;

  }
  if($pas==$res)
  {
  header("Location: front.php?");
  }
  else
  {
    echo '<script>alert("INCORRECT USER NAME OR PASSWORD")</script>';
  }
} else {
    echo '<script>alert("INCORRECT USER NAME OR PASSWORD")</script>';
}
}
else{
    echo "columns are empty";
  } 
  $res= null;
$conn->close();
?>



<?php
session_start();

$message1 = "WELCOME" ;
$message2 = $name;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>My Account</title>
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                                    <li><a href="index.html">Home</a></li>
                                    
                                    <li><a href="music.html">Music</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">Tracks</a></li>
                                            <li><a href="concert-tours.html">Artists</a></li>
                                            <li><a href="blog.html">Genres</a></li>
                                            <li><a href="charts.html">Charts</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="charts.html">Charts</a></li>
                                    <li><a href="concert-tours.html">Concerts</a></li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
                    <form>
                    <h5 style="font-size: 35px; margin-top: 100px; margin-left: 500px; font-weight: bold; color: purple;">Username : </h5>
                    <input label="text" style="font-size: 25px; margin-left: 500px; font-weight: bold; color: salmon;" placeholder="Shreya"></small>

                    <button style="margin-left: 100px; background-color:  salmon;   border: none; padding: 10px 10px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 350px;" >Edit Username</button>
                </div></form>
            </div>
            <div class="summary-single">
                <span ></span>
                <div>
                    <h5 style="font-size: 35px;  margin-left: 500px; font-weight: bold; color: purple;">Email-id :</h5>
                    <input label="text" style="font-size: 25px; margin-left: 500px; font-weight: bold; color: salmon; " placeholder="shreya@gmail.com"></small>
                   &nbsp &nbsp&nbsp <button style="margin-left: 700px; background-color:  salmon;   border: none; padding: 10px 10px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 350px;" >Change Email</button>
                </div>
            </div>
            <div class="summary-single">
                <span ></span>
                <div>
                    <h5 style="font-size: 20px;  margin-left: 500px; margin-top: 100px; color: black;">No longer need your account?</h5>
                    
                    <button style="margin-left: 200px; background-color:  rgb(241, 41, 19);   border: none; padding: 5px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; margin-left: 500px;" >Delete Account</button>
                </div>
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