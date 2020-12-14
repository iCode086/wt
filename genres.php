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
    <title>Genres</title>

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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Genres</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="career-timeline-area section-padding-100">
        <br><br><br><br>
        <!-- ##### Music Artists Area Start ##### -->
        <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="gencha">
            <!-- Music Search -->

            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(img/bg-img/bg-9.jpg);">
                <!-- Content -->

                <div class="music-search-content">
                    <h2>Electronic Dance Music</h2>

                </div>

            </div>


            <!-- Artists Search -->

            <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
                style="background-image: url(img/bg-img/bg-1.jpg);">
                <!-- Content -->

                <div class="music-search-content">
                    <h2>Rock Music</h2>

                </div>

            </div>
        </div>

        <br><br>
        <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="gencha">
            <!-- Music Search -->

            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(img/bg-img/bg-9.jpg);">
                <!-- Content -->
                <div class="music-search-content">
                    <h2>Jazz</h2>
                </div>
            </div>
            <!-- Artists Search -->

            <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
                style="background-image: url(img/bg-img/bg-1.jpg);">
                <!-- Content -->

                <div class="music-search-content">
                    <h2>Dubstep</h2>

                </div>
             </div>
        </div>

        <br><br>
        <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="gencha">
            <!-- Music Search -->

            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(img/bg-img/bg-9.jpg);">
                <!-- Content -->
                <div class="music-search-content">
                    <h2>Rhythm and blue</h2>
                </div>
            </div>
            <!-- Artists Search -->

            <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
                style="background-image: url(img/bg-img/bg-1.jpg);">
                <!-- Content -->

                <div class="music-search-content">
                    <h2>Techno</h2>

                </div>
             </div>
        </div>

        <br><br>
        <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="gencha">
            <!-- Music Search -->

            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(img/bg-img/bg-9.jpg);">
                <!-- Content -->
                <div class="music-search-content">
                    <h2>Country Music</h2>
                </div>
            </div>
            <!-- Artists Search -->

            <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
                style="background-image: url(img/bg-img/bg-1.jpg);">
                <!-- Content -->

                <div class="music-search-content">
                    <h2>Electro</h2>

                </div>
             </div>
        </div>
        <!-- ##### Music Artists Area End ##### -->

        <!-- ##### Career Timeline Area Start ##### -->
        <br><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Genres &amp; history</h2>
                        <h6>Know more about genres you hear everyday and enjoy the experience.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>1 <span></span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>electronic dance music</h5>
                            <p>Electronic dance music (EDM)[1] is a broad range of percussive electronic music genres made largely for nightclubs, raves and festivals. It is generally produced for playback by DJs who create seamless selections of tracks, called a mix, by segueing from one recording to another.[2] EDM producers also perform their music live in a concert or festival setting in what is sometimes called a live PA.

                                In the late 1980s and early 1990s, following the emergence of raving, pirate radios and an upsurge of interest in club culture, EDM achieved widespread mainstream popularity in Europe. In the United States at that time, acceptance of dance culture was not universal; although both electro and Chicago house music were influential both in Europe and the United States, mainstream media outlets and the record industry remained openly hostile to it. There was also a perceived association between EDM and drug culture, which led governments at state and city level to enact laws and policies intended to halt the spread of rave culture.
                             </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>2 <span></span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>rock music</h5>
                            <p>Rock music is a broad genre of popular music that originated as "rock and roll" in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and the United Kingdom.[1][2] It has its roots in 1940s and 1950s rock and roll, a style which drew heavily from the genres of blues, rhythm and blues, and from country music. Rock music also drew strongly from a number of other genres such as electric blues and folk, and incorporated influences from jazz, classical, and other musical styles. For instrumentation, rock has centered on the electric guitar, usually as part of a rock group with electric bass, drums, and one or more singers. Usually, rock is song-based music with a 4/4 time signature using a verse–chorus form, but the genre has become extremely diverse. Like pop music, lyrics often stress romantic love but also address a wide variety of other themes that are frequently social or political.
                             </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>3 <span></span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>jazz</h5>
                            <p>Jazz is a music genre that originated in the African-American communities of New Orleans, United States, in the late 19th and early 20th centuries, with its roots in blues and ragtime.[1][2][3] Since the 1920s Jazz Age, it has been recognized as a major form of musical expression in traditional and popular music, linked by the common bonds of African-American and European-American musical parentage.[4] Jazz is characterized by swing and blue notes, complex chords, call and response vocals, polyrhythms and improvisation. Jazz has roots in West African cultural and musical expression, and in African-American music traditions.
                             </p>
                        </div>
                    </div>

                    <!-- Single Timeline Area -->
                    <div class="single-timeline-area d-flex">
                        <!-- Timeline Date -->
                        <div class="timeline-date">
                            <h2>4 <span></span></h2>
                        </div>
                        <!-- Timeline Content -->
                        <div class="timeline-content">
                            <h5>Country music</h5>
                            <p>Country (also called country and western) is a genre of popular music that takes its roots from genres such as blues and old-time music, and various types of American folk music including Appalachian, Cajun, and the cowboy Western music styles of Red Dirt, New Mexico, Texas country, and Tejano. Its popularized roots originate in the Southern United States of the early 1920s.

                                Country music often consists of ballads and dance tunes with generally simple forms, folk lyrics, and harmonies mostly accompanied by string instruments such as banjos, electric and acoustic guitars, steel guitars (such as pedal steels and dobros), and fiddles as well as harmonicas.[1][2][3] Blues modes have been used extensively throughout its recorded history. </p>
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
    <div class="discography-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark">
                        <h2>the latest release</h2>
                        <h6>Watch the latest release of songs and be first to scrobble.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Discography Slides -->
                    <div class="discography-slides owl-carousel">
                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d1.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d2.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d3.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d4.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d5.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Discography Area End ##### -->

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