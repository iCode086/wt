<!-- LOGIN PAGE -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
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
  header("Location: front.php?");
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



<?php
session_start();

$message1 = "WELCOME" ;
$message2 = $name;

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
?>
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
  .dashboard{-webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-size: 14px;
  line-height: 24px;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  box-sizing: border-box;
  display: block;
  position: relative;
  min-height: 500px;
  padding: 0 0 100px;
  color: #b6c0bf;}
    
    .spikewrap{
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-size: 14px;
  line-height: 24px;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  color: #b6c0bf;
  -webkit-font-smoothing: antialiased!important;
  font-weight: 400;
  box-sizing: border-box;
  display: block;
  position: relative;
  width: 100%;
  height: 280px;
  margin: 6px auto 0;
    }
  .bubble{
    -webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-size: 14px;
  line-height: 24px;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  color: #b6c0bf;
  -webkit-font-smoothing: antialiased!important;
  font-weight: 400;
  box-sizing: border-box;
  left: 50%!important;
  border-radius: 50%!important;
  display: block;
  position: absolute;
  cursor: pointer;
  transform: translateZ(0);
  width: 262px!important;
  height: 262px!important;
  top: 10px!important;
  margin: 0 0 0 -131px;
  opacity: 1;
  background: #1e1e1e;
  border: 1px solid #666;
  
  }
  
  .bubble_img
  {-webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-size: 14px;
  line-height: 24px;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  color: #b6c0bf;
  -webkit-font-smoothing: antialiased!important;
  font-weight: 400;
  cursor: pointer;
  box-sizing: border-box;
  display: block;
  position: absolute;
  border-radius: 50%;
  background-size: cover;
  background-position: center 20%;
  width: 94.6%;
  height: 94.6%;
  top: 2.7%;
  left: 2.7%;
  background-image: url(https://lastfm.freetls.fastly.net/i/u/174s/c2cc697063963288f9aaac346abdae31.png);
  }
  .bubbleshow{
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-size: 14px;
  line-height: 24px;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  color: #b6c0bf;
  -webkit-font-smoothing: antialiased!important;
  font-weight: 400;
  box-sizing: border-box;
  display: block!important;
  position: absolute;
  border-radius: 50%;
  cursor: pointer;
  transform: translateZ(0);
  transition: all .3s ease-in-out;
  opacity: 1;
  animation: c .5s;
  background: #1e1e1e;
  border: 1px solid #666;
  width: 90px;
  height: 90px;
  top: 127.60471765392086px;
  left: 612.1815492689066px;
  }
  .bubble_name{-webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  font-weight: 400;
  cursor: pointer;
  box-sizing: border-box;
  display: block;
  position: absolute;
  height: 22px;
  top: 9px;
  border-radius: 11px;
  font-size: 11px;
  line-height: 11px;
  text-align: center;
  -webkit-font-smoothing: subpixel-antialiased!important;
  left: 50%;
  width: auto;
  min-width: 100%;
  margin: -11px 0;
  padding: 3px 5px 0;
  border: 2px solid #b90000;
  white-space: nowrap;
  opacity: 0;
  background: #b90000;
  color: #fff;
  transition: all .3s ease-in-out;
  margin-left: -44px;
  }
  
  .bubble_number{-webkit-tap-highlight-color: rgba(0,0,0,0);
  --clr-black: #000;
  --clr-obsidian: #111;
  --clr-mineshaft: #222;
  --clr-soot: #2c2c2c;
  --clr-charcoal: #333;
  --clr-graphite: #666;
  --clr-slate: #707070;
  --clr-cement: #999;
  --clr-ash: #adadad;
  --clr-silver: #ccc;
  --clr-smog: #d7d7d7;
  --clr-fog: #e3e3e3;
  --clr-lunar: #ebebeb;
  --clr-dust: #eee;
  --clr-platinum: #f9f9f9;
  --clr-white: #fff;
  --clr-anchor: #9da9a8;
  --clr-submarine: #b6c0bf;
  --clr-navy: #005399;
  --clr-megaman: #2b65d9;
  --clr-azure: #06f;
  --clr-sky: #5cb4ff;
  --clr-arctic: #d9e5fa;
  --clr-aero: #e9effb;
  --clr-sleet: #f5f5f6;
  --clr-indigo: #3636d9;
  --clr-aubergine: #433377;
  --clr-violet: #90f;
  --clr-magenta: #c09;
  --clr-sangria: #9d0000;
  --clr-scarlet: #b90000;
  --clr-crimson: #d50000;
  --clr-habanero: #f71414;
  --clr-postbox: #d92323;
  --clr-jam: #bd1e1e;
  --clr-blush: #fadcdc;
  --clr-rose: #fbe9e9;
  --clr-tangerine: #e63900;
  --clr-fire: #f60;
  --clr-carrot: #f90;
  --clr-merigold: #fb0;
  --clr-sunflower: #ffc900;
  --clr-squash: #ecad00;
  --clr-caramel: #cc7d00;
  --clr-latte: #ffefe5;
  --clr-vanilla: #fcf2cf;
  --clr-lemonade: #fff9e5;
  --clr-turquoise: #00afbf;
  --clr-teal: #1e6875;
  --clr-forest: #00703d;
  --clr-fern: #096;
  --clr-jade: #00ad7a;
  --clr-pistachio: #8fbf00;
  --clr-mint: #e5f4ef;
  --clr-blackgrape: #323656;
  --clr-metacritic-green: #6c3;
  --clr-metacritic-yellow: #fc3;
  --clr-metacritic-red: red;
  --clr-facebook-press: #203c7d;
  --clr-facebook-rest: #3664a2;
  --clr-facebook-hover: #4c8cc7;
  --clr-twitter-press: #338be7;
  --clr-twitter-rest: #55acee;
  --clr-twitter-hover: #77cdf5;
  --clr-amazon-music-press: #0076c8;
  --clr-amazon-music-rest: #008dd1;
  --clr-amazon-music-hover: #00a4da;
  --clr-centibillion-bg: #f1f1f1;
  font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
  color: #b6c0bf;
  font-weight: 400;
  cursor: pointer;
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 22px;
  height: 22px;
  top: 9px;
  left: 29%;
  padding-top: 3px;
  margin: -11px -11px -11px -22px;
  border-radius: 11px;
  font-size: 11px;
  line-height: 11px;
  text-align: center;
  -webkit-font-smoothing: subpixel-antialiased!important;
  background: #000;
  border: 2px solid #666;
  transition: all .3s ease-in-out;}
  
  span:hover{
    background-color: rgb(173, 5, 5);
    
   
  }
  
  </style>
    <style>

        .mm{
        
        
            font-size: 34px;
          text-transform: uppercase;
          letter-spacing: 5px;
          font-weight: 600;
          color:white(146, 11, 11);
          border: 1px solid black;
        }
        
        .z {
          
          width: 1000px;
          height: 800px;
          border: 1px soli black;
          text-align: center;
        }
        
        
        
        .crosshair {cursor:pointer;
           
            
        }
        
        @keyframes myfirst {
          0%   {background: red; left: 0px; top: 100px;}  
          10%  {background: red; left: 0px; top: 280px;}
          20%  {background: red; left: 0px; top: 200px;}
          30%  {background:red; left: 0px; top: 330px;}
          40%  {background: red; left: 0px; top: 150px;}
          50% {background: red; left: 0px; top: 270px;}
          60% {background: red; left: 0px; top: 150px;}
          70% {background: red; left: 0px; top: 380px;}
          80% {background: red; left: 0px; top: 150px;}
          90%  {background:red; left: 0px; top: 380px;}
          100%  {background:red; left: 0px; top: 200px;}
        }
        /* vertical */
        
        @keyframes mfirst {
          0%   {background: red; left: 100px; top: 0px;}
          10%  {background:red; left: 200px; top: 0px;}
          20%  {background:red; left: 400px; top: 0px;}
          30%  {background: red; left: 550px; top: 0px;}
          40%  {background:red; left: 100px; top: 0px;}
          50%  {background: red; left: 340px; top: 0px;}
          60% {background: red; left: 500px; top: 0px;}
          70% {background: red; left: 160px; top: 0px;}
          80% {background: red; left: 320px; top: 0px;}
          90% {background: red; left: 600px; top: 0px;}
          100% {background: red; left: 450px; top: 0px;}
        }
        
        
        
        
        
        
        
        .world1{
          
        
        font-size: 14px;
        
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        color:red;
        -webkit-font-smoothing: antialiased!important;
        box-sizing: border-box;
        user-select: none;
        -webkit-user-drag:none;
        width: 340%;
        height: 4px;
        left: 100;
        border-left: 1px solid #db1212;
        border-right:1px solid #db1212;
        
        position: absolute;
        background:red;
        animation-name: myfirst;
        animation-duration: 50s;
          animation-iteration-count: infinite;
        top: 64.9711%;
        
        }
        
        
        .world2{
          
         
          -webkit-tap-highlight-color: rgba(0,0,0,0);
            width: 75%;
        font-size: 14px;
        line-height: 24px;
        font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
        color: #b6c0bf;
        -webkit-font-smoothing: antialiased!important;
        font-weight: 400;
        box-sizing: border-box;
        user-select: none;
        -webkit-user-drag: none;
        display: block;
        position: absolute;
        width: 3px;
        height: 63%;
        top: 0;
        background: #a2a2a2;
        border-left: 1px solid #db1212;
        border-right: 1px solid #e21212;
        left: 39.985%;
        animation-name: mfirst;
        animation-duration: 50s;
          animation-iteration-count: infinite;
        }
        
        
        
        
        
        </style>
        <style>
            .d {
                background-color: black;
                color: white;
                font-size: large;
                height: 100px;
                width: 230px;
                text-align: center;
                line-height: 150px;
                transition: all 7.0s linear;
            }
        </style>
        <script>function chg() {
                document.getElementById("d1").innerHTML = "POSITIONS Ariana";
                
                document.getElementById("d1").style.width = "800px";
                document.getElementById("d1").style.height = "100px";
                
        
                document.getElementById("d2").innerHTML = " SWEET MELODY Little Mix";
                document.getElementById("d2").style.width = "750px";
                document.getElementById("d2").style.height = "100px";
        
                document.getElementById("d3").innerHTML = "DYNAMITE BTS";
                document.getElementById("d3").style.width = "700px";
                document.getElementById("d3").style.height = "100px";
        
                document.getElementById("d4").innerHTML = "I CAN'T STOP ME Twice";
                document.getElementById("d4").style.width = "560px";
                document.getElementById("d4").style.height = "100px";
            }
        
        </script>
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

<body onload="chg()" style="color: transparent; background-color: black;">
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#discover">Discover</a></li>
                                    <li><a href="#live">Live</a></li>
                                    <li><a href="#aboutus">About</a></li>
                                    <li><button type="submit" class="button1"
                                            onclick="document.getElementById('id01').style.display='block'"><a>Login
                                            </a>

                                        </button></li>
                                        <li><a href="register.php">SignUp</a></li>
                                </ul>

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
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
    <h1>SPIKING ARTIST</h1>
    <div class="spikewrap">
  
      <span class="bubble" data-val="Taylor Swift" >
       
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/079e440141e2c9ddb1277aa70b4dc4be.png););">
        </div>
      </span>
      <a  title="SELENA GOMEZ">
      <span class="bubbleshow " id="bubble1" data-val="Selena Gomez" style="width:90px;height:90px;top:117.60471765392086px;left:872.1815492689066px;">
        <div class="bubble_name" style="left: -34px;">Selena Gomez</div>
        <div  class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/a9ca8ce31b5dd65a876167076452cb59.png);">
        </div>
        <div class="bubble_number" >2</div></a> 
      </span>
  
  
      <a  title="LORDE">
      <span class="bubbleshow" id="bubble2" data-val="Lorde" style="width:88px;height:88px;top:69.550758947778206px;left:470.39104658084648px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/196daf327becd750ca1a417a02364be8.png);">
      </div>
     <div class="bubble_number">3</div></a>
      <div class="bubble_name" style="margin-left: -44px;">Lorde</div>
    </span>
  
    <a  title="HALSEY">
    <span class="bubbleshow" id="bubble3" data-val="Halsey" style="width:87px;height:87px;top:186.40796147347635px;left:500.2971358833771px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/c87b9ccf3e711239bd880370d84b3f38.png);">
      </div>
      <div class="bubble_number">4</div>
      <div class="bubble_name" style="margin-left: -42.5px;">Halsey
      </div>
    </a>
    </span>
  
    <a  title="DUA LIPA">
    <span class="bubbleshow" id="bubble4" data-val="Dua Lipa" style="width:85px;height:85px;top:18.928105769626455px;left:840.8411485109739px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/73cb8679f301cd2bd9336d36d6d1bd40.png);">
      </div>
      <div class="bubble_number">5
  
      </div>
      <div class="bubble_name" style="margin-left: -41px;">Dua Lipa
      </div>
    </span>
  
  </a>
  
  
  <a  title="CARLY RAE JEPSEN">
    <span class="bubbleshow" id="bubble5" data-val="Carly Rae Jepsen" style="width:83px;height:83px;top:85.96210825940443px;left:1118.2171855533147px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/8a8964ae794680f7be69dcafd3bb2e51.png);">
      </div>
      <div class="bubble_number">6
  
      </div>
      <div class="bubble_name" style="margin-left: -49.5px;">Carly Rae Jepsen</div>
    </span>
  </a>
  
  <a  title="Kacey Musgraves">
    <span class="bubbleshow" id="bubble6" data-val="Kacey Musgraves" style="width:81px;height:81px;top:95.42677325735212px;left:389.79816965026743px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/10027ebeb327a374519a5707886d5671.png);"></div>
      <div class="bubble_number">7</div>
      <div class="bubble_name" style="margin-left: -51px;">Kacey Musgraves</div>
    </span>
  </a>
  
  <a  title="KATY PERRY">
    <span class="bubbleshow" id="bubble7" data-val="Katy Perry" style="width:80px;height:80px;top:18.27253550225352px;left:291.5265200546367px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/180b7cc50dd4f8b3785f29854c8b0088.png);">
      </div>
      <div class="bubble_number">8</div>
      <div class="bubble_name" style="margin-left: -39px;">Katy Perry</div>
    </span>
  </a>
  
  <a  title="ARIANAA GRANDE">
    <span class="bubbleshow" id="bubble8" data-val="Ariana Grande" style="width:78px;height:78px;top:179.83049119274801px;left:1027.1140550169721px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/bf50437abbfaea35f9ad843ff8c79b37.png);"></div>
      <div class="bubble_number">9</div><div class="bubble_name" style="margin-left: -44.5px;">Ariana Grande</div>
    </span>
  </a>
  
  <a  title="SUGARLAND">
    <span class="bubbleshow" id="bubble9" data-val="Sugarland" style="width:86px;height:86px;top:184.67593031132293px;left:277.24176134373232px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/896c09b48cfc540b35a2e9bba035c967.png);">
      </div>
      <div class="bubble_number">10</div>
      <div class="bubble_name" style="margin-left: -37px;">Sugarland</div>
    </span>
  </a>
  
  <a  title="THE SCENE">
    <span class="bubbleshow" id="bubble10" data-val="Selena Gomez &amp; the Scene" style="width:74px;height:74px;top:14.221406919375184px;left:996.1835110396087px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/24688b0b8a2eb13213cc4c7ee9446bd3.png);"></div>
      <div class="bubble_number">11</div>
      <div class="bubble_name" style="margin-left: -75px;">Selena Gomez &amp; the Scene</div>
    </span>
  </a>
  
  <a  title="TROYE SIVAN">
    <span class="bubbleshow" id="bubble11" data-val="Troye Sivan" style="width:73px;height:73px;top:94.40544295454242px;left:190.121980550082583px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/bb469b9c664af647739c8a613c45499b.png);"></div>
      <div class="bubble_number">12</div>
      <div class="bubble_name" style="margin-left: -36.5px;">Troye Sivan</div>
    </span>
  </a>
  
  <a  title="HAILEE STEINFELD">
    <span class="bubbleshow" id="bubble12" data-val="Hailee Steinfeld" style="width:71px;height:71px;top:199.94421213532917px;left:1150.2763837747873px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/0a07618659960c7ea0e7b9658b07db84.png);">
      </div><div class="bubble_number">13</div>
      <div class="bubble_name" style="margin-left: -47px;">Hailee Steinfeld</div>
    </span>
  </a>
  <a  title="MILEY CYRUS">
    <span class="bubbleshow" id="bubble13" data-val="Miley Cyrus" style="width:69px;height:69px;top:0.34741798989789174px;left:1115.6930478967797px;">
      <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/8f49faf1b922f7123e8cc457b8f02e75.png);">
      </div>
      <div class="bubble_number">14</div>
      <div class="bubble_name" style="margin-left: -36.5px;">Miley Cyrus</div>
    </span>
  </a>
  
  <a  title="ADELE">
    <span class="bubbleshow" id="bubble14" data-val="Adele" style="width:64px;height:64px;top:193.68444154390926px;left:185.8947469325713px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/16dde3499e0bf3df6f5501c6ea46ee42.png);"></div>
        <div class="bubble_number">15</div><div class="bubble_name" style="margin-left: -31px;">Adele</div>
    </span>
  </a>
  
  <a  title="KELESA BALLERINI">
      <span class="bubbleshow" id="bubble15" data-val="Kelsea Ballerini" style="width:62px;height:62px;top:216.26154673203615px;left:886.3250472932255px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/7a5f91b8b481d7eb59c4c2a3622c3c60.png);">
        </div>
        <div class="bubble_number">16</div>
        <div class="bubble_name" style="margin-left: -46px;">Kelsea Ballerini</div>
      </span>
  
    </a>
  
    <a  title="LITTLE MIX">
      <span class="bubbleshow" id="bubble16" data-val="Little Mix" style="width:58px;height:58px;top:199.3060235201405px;left:410.0618798177245px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/829933c7611d973f80615f6c2253ebfc.png);">
        </div>
        <div class="bubble_number">17</div>
        <div class="bubble_name" style="margin-left: -30.5px;">Little Mix</div>
      </span>
    </a>
  
    <a  title="ONE DIRECTION">
      <span class="bubbleshow" id="bubble17" data-val="One Direction" style="width:52px;height:52px;top:13.1450800424793357px;left:416.21954554503645px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/b8cacb81ab004b19cbbee7cb733f0be8.png);"></div>
        <div class="bubble_number">18</div>
        <div class="bubble_name" style="margin-left: -42.5px;">One Direction</div>
      </span>
    </a>
  
    <a  title="MEGHAN TRAINOR">
      <span class="bubbleshow" id="bubble18" data-val="Meghan Trainor" style="width:49px;height:49px;top:9.941472740415563px;left:210.8990293478197px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/0738324ed5c6e22ef2df7c24ed879b00.png);"></div>
        <div class="bubble_number">19</div>
        <div class="bubble_name" style="margin-left: -48px;">Meghan Trainor</div>
      </span>
    </a>
  
    <a  title="FIFTH HARMONY">
      <span class="bubbleshow" id="bubble19" data-val="Fifth Harmony" style="width:45px;height:45px;top:120.0189453713195px;left:320.46597410815326px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/aea89f5e781540eab81d1999692cc287.png);"></div>
        <div class="bubble_number">20</div>
        <div class="bubble_name" style="margin-left: -43.5px;">Fifth Harmony</div>
      </span>
    </a>
  
    <a  title="DEMI LOVATO">
      <span class="bubbleshow" id="bubble20" data-val="Demi Lovato" style="width:53px;height:53px;top:100.32481207450887px;left:1009.28633742089414px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/b874a9ac728300a8bfa3f3707a685a45.png);"></div>
        <div class="bubble_number">21</div>
        <div class="bubble_name" style="margin-left: -39.5px;">Demi Lovato</div>
      </span>
    </a>
  
    <a  title="BIG TOWN">
      <span class="bubbleshow" id="bubble21" data-val="Little Big Town" style="width:40px;height:40px;top:4.5352658330216826px;left:580.9652786374941px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/b95ea3ae6e5a02a29aadcc8ec809f3ed.png);"></div>
        <div class="bubble_number">22</div>
        <div class="bubble_name" style="margin-left: -44.5px;">Little Big Town</div></span>
      </a>
      <a  title="Bellie Eilish">
      <span class="bubbleshow" id="bubble8" data-val="Billie Eilish" style="width:76px;height:76px;top:14.477856373325935px;left:103.06382537819042px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/8f948b2f01ed5195804aec910872d294.png);">
        </div>
        <div class="bubble_number">23</div><div class="bubble_name" style="margin-left: -37px;">Billie Eilish</div>
      </span></a>
      <a  title="harry styles">
      <span class="bubbleshow" id="bubble9" data-val="Harry Styles" style="width:74px;height:74px;top:17.2966587345228px;left:1241.1909955661024px;">
        <div class="bubble_img" style="background-image:url(https://lastfm.freetls.fastly.net/i/u/174s/e9993673f22fe3a2e702e4d3b6ab3ab5.png);">
        </div>
        <div class="bubble_number">24</div>
        <div class="bubble_name" style="margin-left: -37.5px;">Harry Styles</div>
      </span></a>
    </div>
    <br>
    <br>
    <br>
    <div class="container" id="discover">
        <div class="row"></div>
        <div class="bg-gradients"></div>
        <!-- ##### Breadcumb Area End ##### -->
        <h1>SPIKING TRACKS</h1>
        <div class="spikewrap">
        <div>
            <img src="ari.jpg" style="float: left; height: 100px;"></img>

            <div id="d1" class="d" style="background-image: linear-gradient(to bottom right, #52057b, #9d0191);">Hover Over Me!</div>
            <br>
            <img src="little mix.jpg" style="float: left; height: 100px;"></img>
            <div id="d2" class="d" style="background-image: linear-gradient(to bottom right, #52057b, #9d0191);">Hover Over Me!</div>
        <br>
            <img src="bts1.jpg" style="float: left; height: 100px;" ></img>
            <div id="d3" class="d" style="background-image: linear-gradient(to bottom right, #52057b, #9d0191);">Hover Over Me!</div>
            <br>
            <img src="twice1.jfif" style="float: left; height: 100px;" ></img>
            <div id="d4" class="d" style="background-image: linear-gradient(to bottom right, #52057b, #9d0191);">Hover Over Me!</div>
           
        </div>
        
    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0">
        
        
        </div>
            <div class="row" id="live">
                
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-5">
                    <div class="about-thumbnail mb-100">
                      
                        <div class="bg-gradients"></div>
                        <!-- ##### Breadcumb Area End ##### -->
                        <h1>AROUND THE WORLD</h1>
                        <div class="spikewrap"> 
                            <br>
                            <br>
                        <p id="demo"></p>
                        </div>
                       
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-7">
                    <div class="about--content mb-100">
                        <br>
                        <body background="img3.jpg" text="white" >
  
                            
                           <section>
                            <div onmousemove="showCoords(event)"  class="crosshair" class="stop-animation" class="z"><img src="dot.jpg" width="100%"></img>
                            
                                <img class="world2"></img>
                            <img  class="world1"></img>
                            
                        <br>
                        <br>
                        <br>
                        <div id="changethewords" class="mm" align="left">
            
                            <span data-id="1" >MY FUTURE<br> BELLIE ELISH</span>
                            <span data-id="2" >NIGHTS <br>AVICCI</span>
                            <span data-id="3" >BAD GUY<br>BELLIE ELISH</span>
                            <span data-id="4" >THANK U NEXT <br>ARIANA GRANDE</span>
                            <span data-id="5" >BEST FREIND<br>SOFI TUKER</span>
                            <span data-id="6" >SUNFLOWER <br>POST MALONE</span>
                            <span data-id="7" >VIOLENCE<br>GRIMES</span>
                            <span data-id="8" >SNOWCHILD<br>THE WEEKND</span>
                            <span data-id="9" >NOT FOUND</span>
                           
                            </div>
                       
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                          
                          <script src="jquery.changethewords.js"></script>
                          <script type="text/javascript">
                            $(function() {
                              $("#changethewords").changeWords({
                                time: 4500,
                                animate:"m",
                                selector: "span",
                                repeat:true
                              });
                            });
                          </script>
                           
                          </div>
                        </section>
                          
                          
                          
                          
                          <script>
                          function showCoords(event) {
                            var cX = event.clientX;
                            var sX = event.screenX;
                            var cY = event.clientY;
                            var sY = event.screenY;
                             var x="india"
                            var coords1 = "client - X: " + cX + ", Y coords: " + cY;
                            var coords2 = "screen - X: " + sX + ", Y coords: " + sY;
                           
                            
                            
                            if (cX == 775) {
                              
                              x="Sri lanka AVICCI -SOS"
                            } 
                            else if ((cX > 566 && cX <657 )&&(cY > 337 && cY <380 )) {
                           x = "USA NIGHTS - AVICCI";
                          }  
                          else if ((cX > 937 && cX <984 )&&(cY > 377 && cY <422 )) {
                           x = "INDIA BELLIE ELLISH - MY FUTURE";
                          } 
                          else if (cX > 1102 && cX <1135 ) {
                            x = "PAUPA NEW GUIENE SNOWCHILD - THE WEEKEND";
                          } 
                          else if ((cX > 619 && cX < 774 )&&(cY > 402 && cY < 458 )) {
                            x = "CANADA-BELLIE ELLISH"; 
                          } 
                          else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          }  else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          }  else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          }  else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          }  else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          }  else if (cX > 1102 && cX <1135 ) {
                            x = "INDIA BELLIE ELLISH - MY FUTURE";
                          } 
                          else {
                            x = "NOT FOUND";
                          }
                          
                          //  document.getElementById("demo").innerHTML = coords1 + "<br>" + coords2 + "<br>"+ "<h1>"+x;
                          document.getElementById("demo").innerHTML =  "<br>" + "<br>"+ "<h1>"+x;
                          }
                         
                      
                      </script>
                      
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

        </div>
    <!-- ##### About Us Area Start ##### -->
   
    </div>
    <!-- ##### About Us Area End ##### -->
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br>><br><br><br><br>><br><br><br><br><br><br><br><br>
    <!-- ##### Upcoming Shows Area Start ##### -->
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
    
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Music</h2>
                <h4>Search for the best music</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Artists</h2>
                <h4>Search for the best artists</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->

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