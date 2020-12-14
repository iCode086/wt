<?php
session_start();
$name= $_SESSION['secondMessage'] ;


?>
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
 
if(isset($_POST["Submit11"])) {
    
$name=$_POST['uname'];

$pas=$_POST['psw'];
echo $pas;

$sql = "SELECT id, firstname, pass FROM mysystem WHERE username='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 
  while($row = $result->fetch_assoc()) {
    $res = $row["firstname"];
    $res1 = $row["id"];
    
  }
  if($name==$res)
  {
      
    header("Location: charts.php?");
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
<title>PHP Live MySQL Database Search</title>



</head>
<body>
<form  method="post">
                               
                               <div class="form-group">
                                   <input type="text" class="form-control" name="uname" placeholder="Search" required>
                               </div>
                               
                               <button class="btn musica-btn mt-30" type="submit" onclick="myFunction()" name="Submit11">Go! encore</button>
                               <p id="demo"></p>
</form>
   
</body>
</html>