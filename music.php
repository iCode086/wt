<?php
session_start();
$name= $_SESSION['secondMessage'] ;


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
    <title>Music</title>

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Music <span>Music</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">binge with any mood</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Tracks</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Genres <span>Genres</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">all around the world</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Listeners Creators</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Artists <span>Tracks</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">the perfect music platform</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Encore</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>

        <!-- Slide Down -->

    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100" id="tracks">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>tracks</h2>
                        <h6>Take a tour towards all the songs and see if they match your taste.</h6>
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
                                <h2>1 <span></span></h2>
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
                                <p>3:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Listen Now</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>2 <span></span></h2>
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
                                <p>2:50</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Listen Now</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>3 <span></span></h2>
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
                                <p>4:10</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Listen Now</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>4 <span></span></h2>
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
                                <p>3:00</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Listen Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>  
        <div style="text-align: center; margin-top: 50px;">
            <a href="tracks.html" class="btn musica-btn btn-3 m-2">Explore Tracks</a>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay"
        style="background-image: url(img/bg-img/bg-4.jpg);" id="artists">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Artists</h2>
                        <h6>Discover about artists and their discography in a corner.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/bg-5.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4>― Stephen Chbosky</h4>
                        <p>“And I thought about how many people have loved those songs. And how many people got through a lot of bad times because of those songs. And how many people enjoyed good times with those songs. And how much those songs really mean. I think it would be great to have written one of those songs. I bet if I wrote one of them, I would be very proud. I hope the people who wrote those songs are happy. I hope they feel it's enough. I really do because they've made me happy. And I'm only one person.”</p>
                            <div style=" margin-top: 30px;">
                                <a href="artists.php" class="btn musica-btn btn-3 m-2">Explore Artists</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

 <!-- ##### Music Player Area Start ##### -->
 <div class="music-player-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="music-player-slides owl-carousel">

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp1.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp2.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp3.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp4.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Music Player Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="gencha">
        <!-- Music Search -->

        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
            style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <a href="genres.php">
                <div class="music-search-content">
                    <h2>Genres</h2>
                    <h4>Search for the genres of your choice</h4>
                </div>
            </a>
        </div>


        <!-- Artists Search -->

        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
            style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <a href="char.php">
                <div class="music-search-content">
                    <h2>Charts</h2>
                    <h4>Look for the top artists and tracks</h4>
                </div>
            </a>
        </div>

    </div>
    <!-- ##### Music Artists Area End ##### -->

    <br><br><br><br>
    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2"
        style="background-image: url(img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4>Contact us now</h4>
                            <h2>Do you have a question?</h2>
                            <h6>Ask us anything and everything from discography to how Encore works. Send your queries
                                through contact.</h6>
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