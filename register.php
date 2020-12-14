<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Register</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="animate.changethewords.css">
    <script src="script.js"></script>
  <style>
    

.button2 {
    background-color: black;
  color: white;
  padding: 14px 20px;
 margin-right: 190px ;
 float: right;
margin-top: 100px;
  border: none;
  cursor: pointer;
  
  width: 20%;
}

      .ml13 {
    font-size: 2.9em;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    font-weight: 600;
    color:purple;
  }
  
  .ml13 .letter {
    display: inline-block;
    line-height: 1em;
  }
  
  .ml12 {
    font-size: 1.9em;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    font-weight: 600;
    color:blue;
  }
  
  .ml12 .letter {
    display: inline-block;
    line-height: 1em;
  }
  
  
  span {
    width: 100px;
    height: 100px;
    
    animation-name: fadeIn;
    animation-duration: 8s;
  }
  .myy{
    margin-left: 100px;
        text-align:justify;
        
      }
  .z{
    background-color: white;
  }
  
  .fade-in {
      transform: translatey(-10vw);
    animation: fadeIn ease 4s;
    -webkit-animation: fadeIn ease 4s;
    
  }
  @keyframes fadeIn {
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
  }
 
.my{
  
  animation: slideIn;
  animation-duration: 2s;
  animation-iteration-count: 1;

margin: 20px;
  font-size: 40px;
  font-weight: 1000;
  
  top:250px;
  
}
.my1{
  
  animation: slideIn1;
  animation-duration: 2s;
  animation-iteration-count: 1;

margin: 20px;
  font-size: 40px;
  font-weight: 1000;
  
  top:250px;
  
}



@keyframes slideIn {
    from {
        transform: translatex(1000vw);
        
    }
}
@keyframes slideIn1 {
    from {
        transform: translatex(-1000vw);
        
    }
}


 
  </style>
  
</head>

<body bgcolor="white">
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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="z">
        <div class="bradcumbContent">
            <h2>Register</h2>
        </div>
    </div>
    </div>
   <section>
    <div class=z>
        <br>
        <br>
        <br>
        <br>
        
    <div class="myy">
      <a href="#listner">  <button type="submit" class=button2>START TODAY</button> </a>
    <h1>START</h1>
    
    <div id="changetheword" class="ml13">
      
      <span data-id="1" >GETTING CREDITS <br> AND FEEDBACKS</span>
      <span data-id="2" >PROMOTING YOUR <br>OWN MUSIC</span>     
      <span data-id="3" >SELLING SONGS EARN  MONEY</span>  
      <span data-id="4" >LISTENING TO TRENDING SONGS</span>
      <span data-id="5" >BEING YOUR OWN FAN </span>
     
      </div>
      <h1> with ENCORE SUBURB</h1>
    </div>
      <br>
      <br>
      <br>
      <br>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="jquery.changethewords.js"></script>
<script type="text/javascript">
$(function() {
$("#changetheword").changeWords({
  time: 6000,
  animate:"m",
  selector: "span",
  repeat:true
});
});
</script>







    <div class="musica-music-artists-area d-flex flex-wrap clearfix" id="listner" >
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);" >
            <!-- Content -->
            <div class="music-search-content" >
                <a href="contact.php"> <h2 >Listener
                </h2></a>   
                <h4>Search for the best music</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <a href="../contact.php">  <h2>Artists</h2></a>
                <h4>Search for the best artists</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->
    <!-- bg gradients -->
    
    <div>
        <!--  MARQUEE PROPERTY INFO
        
        + BEHAVIOR:   [ scroll OR slide ] :: default = alternate
            - Scroll:   Object scrolls from side x out of the screen , to side y out of the screen (+repeat)
                 + SCROLLAMOUNT:  Speed of the animation.
                 + SCROLLDELAY:   Seconds elapsed before start animation.
            - Slide:    Object always visible , object slides until it's set position.
            - Alternate: Object always visible , bounce from side to side.
          
        + DIRECTION:  [ left,right,up,down ] :: default = left 
        
        + LOOP:       default= -1 (=inf) 
        
        + VSPACE:     V-align-centers the marquee in the div.
        
        + BGCOLOR:    Add color to the Marquee.
                                                                                                           -->
    
                                                                                                           
                                                                                                           
                                                                                                           
                                                                                                                                                                                                          
        <div class="my1"
         >
         <marquee
      behaviour="alternate"
      height="129px"
      onmouseover="stop()" onmouseout="start()"
      bgcolor="transparent"
      direction="left"
      loop=infinite
      scrollamount=20
      scrolldelay=0
      width=100%
      
    >
      <h1>
         
          
        <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
        
        <span onmousemove="my1Function()"> DISCOO  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
        <span onmousemove="myFunction()">BEATS &nbsp </span>
        
        <span onmousemove="my1Function()"> CLASSICS  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">ROCK  &nbsp  </span>
        <span onmousemove="myFunction()">MOOD BOOSTER &nbsp </span>
        
        <span onmousemove="my1Function()"> LATIN POP &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
        <span onmousemove="myFunction()">SOUL &nbsp </span>
        
        <span onmousemove="my1Function()"> AFRO BEAT  &nbsp </span>
        <span   onmousemove="my2Function()"> CHILLOUT  &nbsp </span>
        <span  onmousemove="my3Function()">AMBIENT  &nbsp  </span>
     
      
      
      </marquee>
    </div>
    <div class="my">
      <marquee
      behaviour="alternate"
      height="130px"
      onmouseover="stop()" onmouseout="start()"
      bgcolor="transparent"
      direction="right"
      loop=infinite
      scrollamount=20
      scrolldelay=0
      width=100%
      
      
    >
    <h1>
        
       
      <span onmousemove="myFunction()">DEJA vu &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    </h1>
     
    </marquee>
    
    
    </div>
    
      <script>
        function myFunction() {
          document.body.style.backgroundColor = "#ffa62b";
        }
      
        function my1Function() {
          document.body.style.backgroundColor = "#cf1b1b";
        }
        function my2Function() {
          document.body.style.backgroundColor = "#318fb5";
        }
        function my3Function() {
          document.body.style.backgroundColor = "#d789d7";
        }
      
    
        </script>
                                                                                                                                                                                                      
        <div class="my1"
         >
         <marquee
      behaviour="alternate"
      height="129px"
      onmouseover="stop()" onmouseout="start()"
      bgcolor="transparent"
      direction="left"
      loop=infinite
      scrollamount=20
      scrolldelay=0
      width=100%
      
    >
      <h1>
         
          
        <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
        
        <span onmousemove="my1Function()"> DISCOO  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
        <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
        
        <span onmousemove="my1Function()"> DISCOO  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
        <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
        
        <span onmousemove="my1Function()"> DISCOO  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
        <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
        
        <span onmousemove="my1Function()"> DISCOO  &nbsp </span>
        <span   onmousemove="my2Function()"> ELECTRONICA  &nbsp </span>
        <span  onmousemove="my3Function()">DRUM AND BASS  &nbsp  </span>
     
      
      
      </marquee>
    </div>
    <div class="my">
      <marquee
      behaviour="alternate"
      height="130px"
      onmouseover="stop()" onmouseout="start()"
      bgcolor="transparent"
      direction="right"
      loop=infinite
      scrollamount=20
      scrolldelay=0
      width=100%
      
    >
    <h1>
        
       
      <span onmousemove="myFunction()">DEJA vu &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    
        
      <span onmousemove="myFunction()">TECH HOUSE &nbsp </span>
      
      <span onmousemove="my1Function()"> DISCOO &nbsp</span>
      <span   onmousemove="my2Function()"> FUNK &nbsp</span>
      <span  onmousemove="my3Function()">INDIE POP &nbsp</span>
      <span  onmousemove="myFunction()">DEEP HOUSE &nbsp</span>
    </h1>
     
    </marquee>
    
    
    </div>
    
    </div>
    
                       

           
    <div class="z">
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
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
   
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