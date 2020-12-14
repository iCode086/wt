
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

if(isset($_POST["test1"]))
{
  $favname=$_POST['test1'];
$sql = "UPDATE mysystem SET email='$favname' WHERE username='$name'";

if ($conn->query($sql) === TRUE) {
    
    echo '<script>alert("Successfully updated new favourite")</script>';
} else {
  echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>


<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Charts</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
    
    .z {
position: fixed;
left: 0px;
bottom: 10px;
width:"100%";
}
.byc{
    background-color:  #bd177a;  border: none; padding: 5px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px;  cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;  
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
    <script>
        function pushRules1(list){
     var rules = "";
 
     
     
     var w = list;
     var li = document.createElement("li");
     var rule = document.createTextNode(w);
     li.appendChild(rule);
     var newElem = document.createElement("BR");
     li.appendChild(newElem);
     var removeBtn = document.createElement("input");
     removeBtn.type = "button";
     removeBtn.value = "Remove";
     removeBtn.onclick = remove;
     removeBtn.className = 'byc';
     li.appendChild(removeBtn);
     document.getElementById("list").appendChild(li);
 }
 
 function remove(e) {
   var el = e.target;
   el.parentNode.remove();
 }
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
                                            <li><a href="artists.php">Artists</a></li>
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
            <h2>CHARTS</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix" id="ttrack">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->


                        <!-- Album Songs -->


                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between" >
                                <div class="album-title">
                               &nbsp &nbsp &nbsp &nbsp <h4 style="color:grey">Tracks</h4>
                                    <h4 style="color:white">Songs that  will change your mood</h4>
                                </div>
                                <div class="album-buy-now">
                                    
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Nights')" id="preview">Nights</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">Message to my future self</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Sunflower</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">Drop that beat</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Poker Face</button>
                                    </div>
                                   <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">Bad at Love</button>
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Graveyard</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">It ain't Me</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">Be Kind</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">ME</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width: 1090px; background-color: lightpink;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">Without Me</button>
                                    </div>
                                   
                                </div>
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
            </div>
        </div>

        <div>
            <br>
        </div>

        <div class="featured-album-area section-padding-100 clearfix" id="tartist">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="featured-album-content d-flex flex-wrap">

                            <!-- Album Thumbnail -->
                            m Songs -->
                          
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ##### About Us Area End ##### -->

        <!-- ##### Career Timeline Area Start ##### -->
        <div class="career-timeline-area section-padding-100" id="debut">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>Artists &amp; debut</h2>
                            <h6>Stories of artists about their debut and struggle during achieving heights.</h6>
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
        <div class="discography-area section-padding-100" id="disco">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading dark">
                            <h2 style="color: rgb(168, 152, 194);">discography</h2>
                            <h6>A place to discover an immense music experience.</h6>
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

        <!-- ##### CTA Area Start ##### -->
        <div class="musica-cta-area section-padding-100 bg-img bg-overlay2"
            style="background-image: url(img/bg-img/bg-8.jpg);">
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
                                <a href="concert-tours.html" class="btn musica-btn">concerts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### CTA Area End ##### -->

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
                                <span style="font-size: 20px; color: rgb(168, 152, 194);">Be a part of this mind-boggling world of music for an
                                    amazing
                                    music experience.</span>
                            </div>
                            <div class="top-social-info" style="color: rgb(168, 152, 194);">
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