<!-- CREATE NEW ACCOUNT -->
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

if(isset($_POST["Submit1"])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$em=$_POST['ems'];
$pas=$_POST['psw'];
$cpas=$_POST['cpsw'];
echo $fname;
echo $lname;
echo $uname;
echo $em;
echo $pas;
echo $cpas;
if($pas!=$cpas)
{
echo '<script>alert("password and confirm password do not match")</script>';
}
else{
$sql = "SELECT id, firstname, lastname FROM mysystem WHERE username='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
      echo $res;
    $res = $row["id"];
    
  }
 
}

if($res==TRUE)
{
    echo $res;
    echo '<script>alert("TIS USERNAME IS ALREADY TAKEN")</script>';
    
}

else{
    
$sql1 = "INSERT INTO mysystem (firstname, lastname, username, email, pass)
VALUES ('$fname', '$lname', '$uname', '$em', '$pas')";

if ($conn->query($sql1) === TRUE) {
  echo "New record created successfully";
  header("Location: front.php?");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

}
  }
}
  else{
   echo "columns are empty";
 } 

 $res= null;
$conn->close();

?>
<?php



session_start();

$message1 = "WELCOME" ;
$message2 = $uname;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
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

</head>

<body style="color: transparent;">
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center" style="background-color:black;">
        <div class="circle-preloader" style="background-color:black;">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" style="background-color:black;">
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
        <div class="bradcumbContent">
            <h2>Details</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### Contact Area Start ##### -->
     <section class="career-timeline-area section-padding-100-0">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <a href="#"><img src="img/bg-img/mp1.jpg" alt=""></a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                       
                            <form  method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="uname" placeholder="User Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="ems" placeholder="Your E-mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" name="psw" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="cpsw" placeholder=" Confirm Password" required>
                                </div>
                                <button class="btn musica-btn mt-30" type="submit" onclick="myFunction()" name="Submit1">Go! encore</button>
                                <p id="demo"></p>

<script>
function myFunction() {

  
</script>
                            </form>
                        </div>
</div>
                   
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->



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
</body>

</html>
