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
    <title>Gallery</title>

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
                        <a href="front.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Gallery</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-30 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fitness-blog-posts">

                        <!-- Single Post Start -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="gallery-artist">
                                <img src="img/blog-img/taylor.jpeg" alt="">
                                <img src="img/blog-img/taylor2.jpeg" alt="">
                                <img src="img/blog-img/taylor3.jpeg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Taylor Swift</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2018</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">3 comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>Taylor Swift is the self-titled debut studio album by American
                                singer-songwriter Taylor Swift, released on October 24, 2006, 
                                by Big Machine Records. Swift was 16 years old the year of 
                                the album's release and wrote its songs during her freshman 
                                year of high school.Upon release, Taylor Swift received generally 
                                positive reviews from music critics, who praised Swift's talent at 
                                such a young age. The album enjoyed commercial success and launched 
                                Swift's career in country music. In the United States, it topped 
                                the Billboard Top Country Albums Chart for 24 weeks, and was 
                                certified 7× Platinum by the RIAA for sales of over seven million 
                                copies in the US. Taylor Swift is the longest-charting album of the 
                                2000s decade on the Billboard 200, charting for 275 weeks in total. 
                                The album was also certified gold in the United Kingdom, platinum in 
                                Australia and Canada.</p>
                            <!-- Read More -->
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Single Post Start -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="gallery-artist">
                                <img src="img/blog-img/armaan1.jpeg" alt="">
                                <img src="img/blog-img/armaan2.jpeg" alt="">
                                <img src="img/blog-img/armaan3.jpeg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Armaan Malik</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2018</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">3 comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>Armaan Malik (born 22 July 1995) is an Indian singer, songwriter, 
                                record producer, voice-over, performer and actor.[2] He is known 
                                for his singing in multiple languages, including Hindi, Kannada, Telugu, 
                                Tamil, Bengali, Marathi, Gujarati, Malayalam, Assamese, Punjabi, English 
                                and Urdu. He also sung in many Indian languages. In 2006, he took part 
                                in Sa Re Ga Ma Pa L'il Champs but got eliminated in the 8th position. 
                                He is the brother of composer Amaal Mallik. Previously represented by 
                                Universal Music India, he is now signed on by T-Series.[3] He has also 
                                signed with Arista Records.[4] His first on-screen appearance was in the 
                                film Kaccha Limboo in the year 2011.[5]

                                He is the youngest singer to win two debut awards at Global Indian Music 
                                Awards (GiMA) and best playback singer award at BIG Star Entertainment 
                                Award in 2015..</p>
                            <!-- Read More -->
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Single Post Start -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="gallery-artist">
                                <img src="img/blog-img/ariana1.jpeg" alt="">
                                <img src="img/blog-img/ariana2.jpeg" alt="">
                                <img src="img/blog-img/ariana3.jpeg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Ariana Grande</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2018</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">3 comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>Grande maintained her pop and R&B sound on her second and third studio albums, 
                                My Everything (2014), and Dangerous Woman (2016), with the former exploring 
                                EDM and producing the UK number-one singles "Problem" and "Bang Bang" and the 
                                latter becoming her first of four consecutive number-one albums in the UK. 
                                Her trap-infused fourth and fifth studio albums, Sweetener (2018) and Thank U, 
                                Next (2019), were both critical and commercial successes. The former won Grande 
                                a Grammy Award for Best Pop Vocal Album, while the latter was nominated for the
                                Album of the Year.[2] The singles "Thank U, Next", "7 Rings", and "Break Up with Your Girlfriend, 
                                I'm Bored" made Grande the first solo artist to hold the top three spots on 
                                the Billboard Hot 100 simultaneously, and the first woman to succeed herself 
                                at the top of the UK Singles Chart. Her 2020 collaborations "Stuck with U" 
                                and "Rain on Me", helped her break the record for the most number-one debuts 
                                on the Hot 100. Grande's R&B-influenced sixth studio album, Positions (2020), 
                                and the eponymous title track, debuted at number-one in the U.K. and U.S., 
                                with the single becoming her record-extending fifth number-one debut on the Hot 100.</p>
                            <!-- Read More -->
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>

                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="gallery-artist">
                                <img src="img/blog-img/coldplay1.jpeg" alt="">
                                <img src="img/blog-img/coldplay2.jpeg" alt="">
                                <img src="img/blog-img/coldplay3.jpeg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Coldplay</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2018</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">3 comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>Coldplay are a British rock band formed in London in 1996.
                                Vocalist, rhythm guitarist and pianist Chris Martin, lead 
                                guitarist Jonny Buckland, bassist Guy Berryman, and drummer 
                                Will Champion met at University College London and began 
                                playing music together from 1996 to 1998, first calling 
                                themselves Pectoralz and then Starfish before finally changing 
                                their name to Coldplay.[3][4] Their creative director and former 
                                manager Phil Harvey is often referred to as the fifth member by the band.</p>
                            <!-- Read More -->
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Pagination -->
                        <div class="musica-pagination-area wow fadeInUp" data-wow-delay="700ms">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4>Contact us now</h4>
                            <h2>Do you have a question?</h2>
                            <h6>Encore will answer all the queries and attend all of them in time. No worries!</h6>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn musica-btn">contact us</a>
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
                                <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                This
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
                            <span style="font-size: 20px;">Be a part of this mind-boggling world of music for an
                                amazing
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