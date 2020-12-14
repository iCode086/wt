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
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">

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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Artist Corner</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <h1 style="font-family: sans-serif; font-style: italic; text-align: center; color: blueviolet; padding-top: 50px; padding-bottom: 1px;">Artists Around the Globe</h1>
    <div class="container">
        <div class="box">
            <div class="imgBox">
                <img src="ariana2.jpg">
                <div class="details">
                    <div class="content">
                    <h2>Ariana Grande</h2>
                    <p>Ariana Grande-Butera is an American singer and actress. Born in Boca Raton, Florida, Grande began her career at age 15 in the 2008 Broadway musical 13. She rose to fame for her role as Cat Valentine in the Nickelodeon television series Victorious and Sam & Cat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="bts.jpg">
                <div class="details">
                    <div class="content">
                    <h2>BTS</h2>
                    <p>BTS, also known as the Bangtan Boys, is a seven-member South Korean boy band that began formation in 2010 and debuted in 2013 under Big Hit Entertainment. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="kanye.jfif">
                <div class="details">
                    <div class="content">
                    <h2>Kanye West</h2>
                    <p>Kanye Omari West is an American rapper, record producer, and fashion designer. He has been influential in the 21st-century development of mainstream hip hop and popular music in general.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="taylor.jpg">
                <div class="details">
                    <div class="content">
                    <h2>Taylor Swift</h2>
                    <p>Taylor Alison Swift is an American singer-songwriter. Her narrative songwriting, which often centers around her personal life, has received widespread critical plaudits and media coverage</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="arijit.jpg">
                <div class="details">
                    <div class="content">
                    <h2>Arijit Singh</h2>
                    <p>Arijit Singh is an Indian playback singer. He sings predominantly in Hindi and Bengali but has also performed in various other Indian languages. He is the recipient of a National Award and six Filmfare Awards</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="shreya.jpg">
                <div class="details">
                    <div class="content">
                    <h2>Shreya Ghoshal</h2>
                    <p>Shreya Ghoshal is an Indian playback singer, composer and music producer. She has received four National Film Awards, four Kerala State Film Awards, two Tamil Nadu State Film Awards, seven Filmfare Awards including six for Best Female Playback Singer and ten Filmfare Awards South</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Career Timeline Area Start ##### -->
     <div class="career-timeline-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Popular Music Styles</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    Single Timeline Area
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                         <div class="timeline-date">
                            <h2>1</h2>
                        </div> 
                        <!-- Timeline Content -->
                         <div class="timeline-content">
                            <h5>Classical Music</h5>
                            <p>Classical music is art music produced or rooted in the traditions of Western culture, including both liturgical and secular music.
                                Classical music has a lighter, clearer texture than Baroque music and is less complex. It is mainly homophonic, using a clear melody line over a subordinate chordal accompaniment, but counterpoint was by no means forgotten, especially later in the period. </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex"> -->
                        <!-- Timeline Date -->
                         <div class="timeline-date">
                            <h2>2</h2>
                        </div>
                        <!-- Timeline Content -->
                         <div class="timeline-content">
                            <h5>Rock Music</h5>
                            <p>Rock music is a broad genre of popular music that originated as "rock and roll" in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and the United Kingdom. </p>
                        </div>
                    </div> 

                    <!-- Single Timeline Area -->
                     <div class="single-timeline-area d-flex"> 
                        <!-- Timeline Date -->
                         <div class="timeline-date"> 
                             <h2>3</h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>Hip-Hop Music</h5>
                            <p>Hip hop music, also known as rap music, is a genre of popular music developed in the United States by inner-city African Americans and Latino Americans in the Bronx borough of New York City in the 1970s.  </p>
                        </div>
                    </div> 

                    <!-- Single Timeline Area -->
                     <div class="single-timeline-area d-flex"> 
                        <!-- Timeline Date -->
                         <div class="timeline-date">
                            <h2>4</h2>
                        </div> 
                        <!-- Timeline Content -->
                         <div class="timeline-content">
                            <h5>Folk Music</h5>
                            <p>Folk music includes traditional folk music and the genre that evolved from it during the 20th-century folk revival. Some types of folk music may be called world music. </p>
                        </div>
                    </div>

                </div>
            </div> 

             <div class="row">
                <div class="col-12">
                    <div class="timeline-btn text-center mt-100">
                        <a href="#" class="btn musica-btn">Load More</a>
                    </div>
                </div>
            </div>

        </div> 

        <!-- Side Thumbs -->
         <div class="first-img">
            <img src="img/bg-img/man.png" alt="">
        </div>
        <div class="second-img">
            <img src="img/bg-img/microphone.png" alt="">
        </div>
    </div> 
    <!-- ##### Career Timeline Area End ##### -->

    <!-- ##### Discography Area Start ##### -->
    <!-- <div class="discography-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark">
                        <h2>discography</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12"> -->
                    <!-- Discography Slides -->
                    <!-- <div class="discography-slides owl-carousel"> -->
                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d1.jpg" alt=""></a>
                        </div> -->

                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d2.jpg" alt=""></a>
                        </div> -->

                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d3.jpg" alt=""></a>
                        </div> -->

                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d4.jpg" alt=""></a>
                        </div> -->

                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d5.jpg" alt=""></a>
                        </div> -->

                        <!-- Single Discography -->
                        <!-- <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ##### Discography Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <span>Unique Way to see a</span>
                            <h2>Music Concert</h2>
                            <h4>Search for the best music</h4>
                        </div>
                        <div class="cta-btn mt-30">
                            <a href="#" class="btn musica-btn">elements</a>
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
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
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