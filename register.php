 <?php
    $fname=$_REQUEST['firstname'];
    $mname=$_REQUEST['middlename'];
    $lname=$_REQUEST['lastname'];
    $age=$_REQUEST['age'];
    $addr=$_REQUEST['address'];
    $contact=$_REQUEST['cn'];
    $uname=$_REQUEST['username'];
    $password=$_REQUEST['pwd'];
    $servername ="localhost";
    $pwd="";
    $username="root";

    $conn=mysqli_connect($servername,$username,$pwd,"hotel");
    if(!$conn)
     echo $conn;
    else
    {

      $sql="INSERT INTO customer (First_name,Middle_name,Last_name,Age,Address,Contact_no,username,Password) VALUES ('$fname','$mname','$lname','$age','$addr','$contact','$uname','$password')";
      //$sql = "INSERT INTO "
      $result=mysqli_query($conn,$sql);
      if(!$result)
        {
           $msg = "THERE IS SOME ERROR...";
            header( "Refresh:1; url=userregistration.php", true, 303);
        }
      else
        {
            $msg = "THANK YOU FOR REGISTERING..YOU WILL BE REDIRECTED TO LOGIN PAGE SHORTLY..!";
            header( "Refresh:1; url=userlogin.php", true, 303);
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Paradise - Register</title>
  <link rel="icon" type="image/png" href="assets/logo.jpg">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Your Website</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/palette.css">
  <link rel="stylesheet" type="text/css" href="css/foodMenuCss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

</head>

<body>
  <div class = "header">
    <div class = "heading">Hotel Paradise</div>
  </div>
  <div>
    <ul class="default-primary-color">
      <li><a href="index.php">Home</a></li>
      <li><a href="roomBooking.php">Rooms</a></li>
      <li><a href="foodmenu.php">Menu</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="userlogin.php">Login</a></li>
      <li><a href="admin.php">Admin Panel</a></li>
          <li style = "float:right"><a href ="cart.php">Cart</a></li>
    </ul>
  </div>
    <div style = "height:250px;margin-top:20px">
          <h1 style = "color:#795548;text-align: center"><?= $msg ?></h1>
      </div>

    <div class = "footer dark-bg" style="border: 1px solid black;">
    <div style="align-content: center;">
      <center><img src="assets/divider-white.svg" width = 400px></center>
      <p>Hotel Paradise<br>
      some address<br>
      © All rights reserved</p>
    </div>
  </div>
  <script src = "addtocart.js"></script>
</body>
</html>
