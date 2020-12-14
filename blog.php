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
    <title>News</title>

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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>News</h2>
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
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms" id="one">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Ariana Grande Hits the Laboratory in '34+35' Video Teaser</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>Nov 14, 2020</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">3k comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>Ariana Grande is getting scientific for her next music video.

                                The 27-year-old pop star took to social media on Saturday (Nov. 14) to tease a snippet from the upcoming music video for her sensual jam "34+35."
                                
                                Set in a high-tech laboratory, Grande wears a long white lab coat with matching stiletto boots while nervously walking and taking notes on a clipboard. She then approaches a large piece of machinery and slams her hand onto a round button.
                                
                                "Ariana Grande '34+35,'" reads a message at the closing. "Coming to a screen near you."

                                "34+35" is the second single from Grande's latest album, Positions, which recently topped the Billboard 200, giving the singer her firth No. 1 album.
                                
                                The song debuted at No. 8 on the Hot 100 earlier in the week with 21.7 million streams, 5.7 million airplay audience impressions and 3,000 sold. "34+35" is Grande’s 18th total top 10 hit on the Hot 100 to date, the most of any woman in the chart's history.
                                
                                </p>
                            <!-- Read More -->
                            <a href="https://www.billboard.com/articles/columns/pop/9484354/ariana-grande-34-35-song-music-video-teaser-positions-album/" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Single Post Start -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms" id="two">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/2.jpg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">With COVID-19, concert industry from artists to tour managers forced to rethink live shows, music production</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 16, 2020</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">2k comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>It was a show like no other for country music star Keith Urban.

                                Instead of people standing together in a massive auditorium or on a football field like at past shows, the audience members for this surprise performance, all health care workers, watched the "We Were" singer from their cars, parked 6 feet apart.
                                
                                "It felt amazing to be playing," Urban said. "People were honking horns and flicking headlights. ... It was really magical."
                                
                                The surprise concert Urban performed on Thursday was held at the Stardust Drive-In Movie Theater, about 40 miles east of Nashville, Tennessee. He was one of the first artists in the country to perform a live show in front of an audience since the onset of the pandemic.
                                
                                Almost 125 vehicles filled the parking lot for the unannounced show, which was only for doctors, nurses, EMTs and staff from Vanderbilt Health, a division of Vanderbilt University Medical Center.</p>
                            <!-- Read More -->
                            <a href="https://abcnews.go.com/Entertainment/covid-19-concert-industry-artists-tour-managers-forced/story?id=70722332" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Single Post Start -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="500ms" id="three">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/3.jpg" alt="">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title">Pandemic is making musicians sing a different tune—virtually</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>Oct 18, 2020</p>
                                </div>
                                <!-- Comments -->
                                <p class="comments"><a href="#">900 comments</a></p>
                            </div>
                            <!-- bg gradients -->
                            <div class="bg-gradients mb-30 w-25"></div>
                            <!-- Post Excerpt -->
                            <p>People thronging without masks, cheering loudly and singing and dancing to the Punjabi and Bollywood cover songs — all these and more were part of a typical workday for Sukhmani Malik and Hari Singh. But that was until seven months ago when the duo would belt out Punjabi and Bollywood cover songs live at full-to-the-brink bars in Delhi and Chandigarh. Little did they know that they would soon have to sing a different tune to be relevant. And that was what they did as Covid-19 enforced social dis ..

                                Read more at:
                                https://economictimes.indiatimes.com/magazines/panache/pandemic-is-making-musicians-sing-a-different-tunevirtually/articleshow/78722437.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst</p>
                            <!-- Read More -->
                            <a href="https://economictimes.indiatimes.com/magazines/panache/pandemic-is-making-musicians-sing-a-different-tunevirtually/articleshow/78722437.cms" class="read-more-btn">Read more</a>
                        </div>

                        <!-- Pagination -->
                        <div class="musica-pagination-area wow fadeInUp" data-wow-delay="700ms">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item active"><a class="page-link" href="#one">01.</a></li>
                                    <li class="page-item"><a class="page-link" href="#two">02.</a></li>
                                    <li class="page-item"><a class="page-link" href="#three">03.</a></li>
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