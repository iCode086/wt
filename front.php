<!-- LOGIN PAGE -->
<?php
session_start();
$name= $_SESSION['secondMessage'] ;


?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
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
  header("Location: index1.php?");
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





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Front page</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
    
        .shift{
            float:right;
            margin-right:200px;
        }
    </style>
   

    <style>
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(24, 22, 22);
            box-sizing: border-box;
        }

        .button1 {
            background-color: Transparent;
            border: none;
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            cursor: pointer;
        }

        .button2 {
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;

            width: 100%;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            border-color: #000;
            background-color: #690000;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            color: bisque;
            padding: 16px;
            border-radius: 20px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-image: linear-gradient(180deg, rgb(51, 7, 71), rgb(12, 2, 11));
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            box-shadow: 0 0 20px 0 rgba(243, 4, 4, 0.2), 0 5px 5px 0 rgba(68, 2, 2, 0.24);
            border-radius: 20px;
            border: 2px solid rgb(78, 1, 1);
            width: 40%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
        </style>
        <style>
    
    .z {
position: fixed;
left: 0px;
bottom: 10px;
width:"100%";
}
</style>
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#div2").hide();
  $("#preview").click(function() {
   
    $("#div2").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#div2").hide();
  $("#preview1").click(function() {
   
    $("#div2").show();
  });
});
</script>
        <script>
    function cs_change_music(music)
{
document.getElementById("my-audio").pause();
document.getElementById("my-audio").setAttribute('src', music);
document.getElementById("my-audio").load();
document.getElementById("my-audio").play();
}
function my(x)
{
    
  document.getElementById("demo").innerHTML = x;
}
</script>
</head>

<body style="color: transparent; background-color: black;">
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
                        <a href="index.html" class="nav-brand"><img src="encore_crow.png" alt=""></a>

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
                    <h2 data-animation="fadeInUp" data-delay="100ms">Encore <span>Encore</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Music Experience</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Encore</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Music <span>Revolution</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">calm your mind</p>
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
                    <h2 data-animation="fadeInUp" data-delay="100ms">Encore <span>Encore</span></h2>
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

    <!-- ##### Music Artists Area Start ##### -->
    <div id="discover" class="upcoming-shows-area section-padding-100">
        <div class="musica-music-artists-area d-flex flex-wrap clearfix">
            <!-- Music Search -->
            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                style="background-image: url(img/bg-img/bg-9.jpg);">
                <!-- Content -->
                <div class="music-search-content">
                    <h2>Music</h2>
                    <h4>Search for the best music</h4>
                </div>
            </div>

            <!-- Artists Search -->
            <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
                style="background-image: url(img/bg-img/bg-1.jpg);">
                <!-- Content -->
                <div class="music-search-content">
                    <h2>Artists</h2>
                    <h4>Search for the best artists</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->



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

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        </div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>Love is all Around</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="#" class="btn musica-btn">Buy it on Itunes</a>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Drop the Beat</button>
                                       
                                    </div>

                                    <!-- Single Song -->
                                    
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/dummy-audio.mp3');my('Message from Future')" id="preview">Message to my Future</button>
                                        
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Hey,mister Dj')" id="preview">Hey,mister Dj</button>
                                       
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Drop the Beat</button>
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Hey,mister Dj')" id="preview">Hey,mister Dj</button>
                                       
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Message to my Future')" id="preview">Message to my Future</button>
                                        
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>

                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style=" width: 250px;background-color:  #bd177a;   border: none; padding: 10px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px; " onclick="cs_change_music('audio/sofi.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj...</button>
                                       
                                    </div>
                                </div>
                            </div>

                            <!-- Now Playing -->
                            <div  class="z" id="div2">
                                <div class="songs-name">
                                    <p>Playing</p>
                                    <h4 style="color:brown" id="demo">Drop that beat</h4>
                                </div>
                                <audio id="my-audio" controls>
                                    <source src="audio/dummy-audio.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay"
        style="background-image: url(img/bg-img/bg-4.jpg);" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                        <h6>Facilities provided by Encore in this platform with percentage.</h6>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Loaders Area Start -->
                <div class="our-skills-area">
                    <div class="row">

                        <!-- Single Skills Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-skils-area mb-100">
                                <div id="circle" class="circle" data-value="0.85">
                                    <div class="skills-text">
                                        <span style="color: rgb(168, 152, 194);">85%</span>
                                    </div>
                                </div>
                                <h5 style="color: rgb(138, 136, 133);">Track-songs</h5>
                                <p>Songs with genres</p>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-skils-area mb-100">
                                <div id="circle2" class="circle" data-value="0.63">
                                    <div class="skills-text">
                                        <span style="color: rgb(168, 152, 194);">63%</span>
                                    </div>
                                </div>
                                <h5 style="color: rgb(138, 136, 133);">Artists</h5>
                                <p>Well-known artists</p>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-skils-area mb-100">
                                <div id="circle3" class="circle" data-value="0.95">
                                    <div class="skills-text">
                                        <span style="color: rgb(168, 152, 194);">95%</span>
                                    </div>
                                </div>
                                <h5 style="color: rgb(138, 136, 133);">Charts</h5>
                                <p>Ranging charts</p>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-skils-area mb-100">
                                <div id="circle4" class="circle" data-value="0.42">
                                    <div class="skills-text">
                                        <span style="color: rgb(168, 152, 194);">42%</span>
                                    </div>
                                </div>
                                <h5 style="color: rgb(138, 136, 133);">News</h5>
                                <p>Music Industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== Milestones ========== -->
            <div class="col-12">
                <div class="elements-title mb-50">
                    <h2 style="color: rgb(168, 152, 194);">Milestone</h2>
                </div>
            </div>

            <div class="col-12">
                <div class="musica-cool-facts-area">
                    <div class="row">

                        <!-- Single Cool Facts -->
                      <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-cool-fact d-flex align-items-end mb-100">
                                <div class="scf-icon">
                                    <img src="img/core-img/microphone.png" alt="">
                                </div>
                                <div class="scf-text">
                                    <h2 style="color: rgb(168, 152, 194);"><span class="counter">230</span>m</h2>
                                    <p>Tracks</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-cool-fact d-flex align-items-end mb-100">
                                <div class="scf-icon">
                                    <img src="img/core-img/compact-disc.png" alt="">
                                </div>
                                <div class="scf-text">
                                    <h2 style="color: rgb(168, 152, 194);"><span class="counter" >439</span>k</h2>
                                    <p>Albums</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-cool-fact d-flex align-items-end mb-100">
                                <div class="scf-icon">
                                    <img src="img/core-img/controls.png" alt="">
                                </div>
                                <div class="scf-text">
                                    <h2 style="color: rgb(168, 152, 194);"><span class="counter">245</span></h2>
                                    <p>Charts</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-cool-fact d-flex align-items-end mb-100">
                                <div class="scf-icon">
                                    <img src="img/core-img/calendar.png" alt="">
                                </div>
                                <div class="scf-text">
                                    <h2 style="color: rgb(168, 152, 194);"><span class="counter">128</span></h2>
                                    <p>Calendar Events</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->
    <br><br><br><br>
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

    <!-- ##### Login/Signup Area Start-->
    <div id="id01" class="modal">

        <form class="modal-content animate"  method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>

            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" class=button2 name="Submit1">Login</button>
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw">Create a <a href="register.php" style="color: rgba(255, 228, 196, 0.418);">New
                        Account!!!</a></span>
            </div>

            <div class="container" style="background-image: linear-gradient(0deg, rgb(44, 9, 41), rgb(12, 2, 11));">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#" style="color: rgba(255, 228, 196, 0.418);">password?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- ###### Login/signup Area End-->


</body>

</html>
<?php
session_start();

$message1 = "WELCOME" ;
$message2 = $name;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
?>

