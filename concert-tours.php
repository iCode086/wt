<?php
session_start();
$name= $_SESSION['secondMessage'] ;


?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
if(isset($_POST["test1"])) {

$country=$_POST['country'];

$city=$_POST['city'];


$sql = "SELECT id, city, dat, rang FROM mucountry WHERE country='$country'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $res = $row["city"];
    


  }
  if($city==$res)
  {
    
    echo '<script>alert("Tickets available on given dates and price range")</script>';
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
    
  } 
  $res= null;
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

    <!-- Title -->
    <title>Concerts</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                                <a href="ac.php"><i  aria-hidden="true"><?php echo $name; ?></i></a>
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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="bradcumbContent">
            <h2>Tour Dates</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Search Shows Area Start ##### -->
    <div class="search-your-shows-area section-padding-100 bg-img" style="background-image: url(img/bg-img/bg-6.jpg);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="search-your-shows-content">
                        <h2>Search Your Show</h2>
                        <div class="search-form">
                            <form  method="post" class="form-inline justify-content-center">
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" id="your_country" value="" placeholder="Your Country" name="country">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" id="your_city" value="" placeholder="City" name="city">
                                </div>
                                <div class="form-group m-2">
                                    <input type="date" class="form-control" id="your_date" value="" placeholder="Date" name="dat">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" id="price_range" value="" placeholder="Price Range" name="rang">
                                </div>
                                <button type="submit" class="btn musica-btn m-2" name="test1">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Search Shows Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Upcoming shows</h2>
                        <h6>Get to know all the upcoming shows up here at one place.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s1.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s2.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric Festival</h6>
                                    <p>Manhathan, NY, USA</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Main Stadium</p>
                            </div>
                            <div class="shows-time">
                                <p>21:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Featured Shows Area Start ##### -->
    <div class="featured-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark">
                        <h2>Featured Shows</h2>
                        <h6>The best out of best shows at your near-by location with featured artists.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="featured-shows-slides owl-carousel">

                        <!-- Single Featured Shows -->
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs1.jpg" alt="">
                            <!-- Content -->
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Grand Hall Miami</h4>
                                    <p>January 23</p>
                                    <a href="#" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>

                        <!-- Single Featured Shows -->
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs2.jpg" alt="">
                            <!-- Content -->
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Super Stadion</h4>
                                    <p>January 23</p>
                                    <a href="#" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>

                        <!-- Single Featured Shows -->
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs3.jpg" alt="">
                            <!-- Content -->
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Grand Hall Miami</h4>
                                    <p>January 23</p>
                                    <a href="#" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>

                        <!-- Single Featured Shows -->
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs4.jpg" alt="">
                            <!-- Content -->
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Super Stadion</h4>
                                    <p>January 23</p>
                                    <a href="#" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Shows Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4>Contact us now</h4>
                            <h2>Do you have a question?</h2>
                            <h6>Ask us anything and everything from discography to how Encore works. Send your queries through contact.</h6>
                        </div>
                        <div class="cta-btn">
                            <a href="contact.html" class="btn musica-btn">contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

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
$message2 = $name;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
?>
?>