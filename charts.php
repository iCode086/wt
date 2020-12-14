
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
$sql = "UPDATE mysystem SET fav='$favname' WHERE username='$name'";

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
    background: purple;
    height:  38px;
     line-height:  40px;
     border:  2px solid white;
     display:  inline-block;
     float:  none;
     text-align:  center;
     width:  120px;
     padding:  0px!important;
     font-size:  14px;
     color:  #fff;
}
.byc:hover  {
     color:  #fff;
     background:  rgba(255, 255, 255, 0.2);
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
                                <form  method="post">
                               
                              
                                   <input type="text" class="form-control" name="uname" placeholder="Search" required>
                               </div>
                               
                               <button style=" width:50px; background-color:  #bd177a; float: right;  border: none; padding: 5px 5px; text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;"  type="submit" onclick="myFunction()" name="Submit11">Go!</button>
                            <p id="demo"></p>
</form>
                                    <a href="ac.php"><i  aria-hidden="true" style="color:white;"><?php echo $name; ?></i></a>

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
            <h2>WEEKND</h2>
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

                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between" >
                                <div class="album-title">
                                    <h6>Top track</h6>
                                    <h4>Love is all Around</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="#" class="btn musica-btn">Top tracks</a>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        
                                        <button style="width:150px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">SNOWCHILD</button>
                                        <button type="button" value="jhon" class="shift" onclick="pushRules1('SNOWCHILD')" name="john" style="width:160px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;margin-left: 160px">add to playlist</button>
                                    </div>
                                    <div class="single-music">
                                    <button style="width:150px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">BLINDING LIGHTS</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('BLINDING LIGHTS')" name="john" style="width:160px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;margin-left: 160px">add to playlist</button>
                                     
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width:150px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/sofi.mp3'); my('Message to the Future')" id="preview" value="messa">STARBOY</button>
                        
                                        <button type="button" value="jhon" class="shift" onclick="pushRules1('STARBOY')"style="width:160px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;margin-left: 160px">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button style="width:150px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;" onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                        
                                        <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')"style="width:160px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;margin-left: 160px">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')" style="width:160px; background-color:  #bd177a;   border: none; padding: 8px 8px; text-align: center; text-decoration: none;  display: inline-block; font-size: 20px; margin: 4px 10px; cursor: pointer; font-family: sans-serif; font-weight: bold; border-radius: 4px;margin-left: 160px">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>
                                   <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                    <button onclick="cs_change_music('audio/dummy-audio.mp3');my('Drop the Beat')" id="preview">Hey,mister Dj</button>
                                    <button type="button" value="jhon" class="shift" onclick="pushRules1('eyelash')">add to playlist</button>
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
                            
        <h1 style="color:white;">CHECK YOUR PLAYLIST</h1>
        <ul id="list" style="color:white;"></ul>
                            <!-- Now Playing -->



                        </div>
                        <div class="album-thumbnail h-100 bg-img "
                                style="background-image: url(week.jpg); position: relative;">
                            </div>

                    </div>

                </div>
            </div>
        </div>

        <div>
            <br>
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

                        <!-- Single Timeline Area -->
                        <div class="single-timeline-area d-flex">
                            <!-- Timeline Date -->
                            <div class="timeline-date">
                                <h2>24 <span>Oct 2006</span></h2>
                            </div>
                            <!-- Timeline Content -->
                            <div class="timeline-content">
                                <h5>Taylor swift</h5>
                                <p>Swift showed enough promise to motivate her family to relocate to Nashville when she turned 14.
                                     Her mother, Andrea, recalls: "It was never about 'I want to be famous.' Taylor never uttered those words.
                                      It was about moving to a place where she could write with people she could learn from." 
                                      Her first after-school job was working on songs in Nashville; she made enough money to buy a Lexus 430 SC convertible.
                                       She still drives it, despite a few wrecks, "because I am monogamous when it comes to my car." 
                                       In a delicious twist, Swift's friend Abigail Anderson says, "she got the same [model] car as the one in the movie Mean Girls"--take that,
                                        bitchy posse back in PA. Her entire sophomore year, Swift says, "was positively life-changing." Plus, she says, 
                                        like she's revealing a surprise bonus in the car's option package, "all of a sudden, I had a lot more friends." </p>
                            </div>
                        </div>

                        <!-- Single Timeline Area -->
                        <div class="single-timeline-area d-flex">
                            <!-- Timeline Date -->
                            <div class="timeline-date">
                                <h2>18 <span>Nov 2015</span></h2>
                            </div>
                            <!-- Timeline Content -->
                            <div class="timeline-content">
                                <h5>Billie Eilish</h5>
                                <p>Billie Eilish is an American singer-songwriter who first shot to prominence 
                                    when she uploaded her breakout hit "Ocean Eyes" to SoundCloud in 2015.
                                     The song went viral in 2016.As Eilish told i-D, she made the song after
                                      her dance instructor asked her to record something that she and her fellow 
                                      dancers could perform to. She worked with her brother, Finneas O'Connell, to 
                                      record "Ocean Eyes," a song O'Connell had initially written for his band. 

                                     The Darkroom, an imprint of Interscope Records, later signed the young singer
                                      and officially released "Ocean Eyes" as her debut single in November 2016.
                                     
                                     Since then, Eilish has gone on to release critical and commercial hits like "Bad Guy,"
                                      "When the Party's Over," "You Should See Me in a Crown," and "Bury a Friend," to name a few.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area -->
                        <div class="single-timeline-area d-flex">
                            <!-- Timeline Date -->
                            <div class="timeline-date">
                                <h2>05 <span>June 2012</span></h2>
                            </div>
                            <!-- Timeline Content -->
                            <div class="timeline-content">
                                <h5>Ariana Grande</h5>
                                <p>Although Grande didn’t reach the top of the Hot 100 until she released the lead single of her fifth
                                     full-length in 2018, she had been getting close to the summit since the beginning of 
                                     her pop career in 2013, when her debut single “The Way” with Mac Miller reached No. 9 
                                     on the chart. In the years that followed, Grande amassed 10 total top 10 hits prior to “Thank U, Next,”
                                      including the 2014 smash “Problem” with Iggy Azalea, that made it to No. 2. All six of Grande’s albums 
                                      boast at least one top 10 hit on their track list, demonstrating the consistency that helped make her 
                                      a headliner well before she had guided a single to No. 1. </p>
                            </div>
                        </div>

                        <!-- Single Timeline Area -->
                        <div class="single-timeline-area d-flex">
                            <!-- Timeline Date -->
                            <div class="timeline-date">
                                <h2>17 <span>Nov 2009</span></h2>
                            </div>
                            <!-- Timeline Content -->
                            <div class="timeline-content">
                                <h5>Justin Bieber</h5>
                                <p>Justin Drew Bieber (born March 1, 1994) is a Canadian singer, songwriter and multi-instrumentalist. 
                                    Discovered at age 13 by talent manager Scooter Braun after he had watched his YouTube cover song 
                                    videos, Bieber was signed to RBMG Records in 2008. With Bieber's debut EP My World, released in
                                     late 2009, Bieber became the first artist to have seven songs from a debut record chart on the Billboard Hot 100.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area -->
                        <div class="single-timeline-area d-flex">
                            <!-- Timeline Date -->
                            <div class="timeline-date">
                                <h2>14 <span>Mar 2006</span></h2>
                            </div>
                            <!-- Timeline Content -->
                            <div class="timeline-content">
                                <h5>DJ Khaled</h5>
                                <p>Khaled began working in record stores, helping artists like Lil Wayne and Birdman in their music 
                                    careers before they made it big. After jumping into the DJ circuit, Khaled moved to Miami in 1998
                                     where he began working in radio, co-hosting with Luther Campbell of 2 Live Crew on The Luke 
                                     Show on WEDR "99 Jamz." A few years later he snagged his own weeknight radio show at the station.
                                      Throughout his career, he has gone through many monikers: Arab Attack, Terror Squadian, 
                                      Beat Novacane, Big Dog Pitbull and Mr. Miami, to name a few. As a music producer,
                                       he's worked on rap and hip-hop albums like True Story by Terror Squad, 
                                       Real Talk by Fabolous, and All or Nothing by Fat Joe .</p>
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