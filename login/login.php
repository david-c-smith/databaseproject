<?php

ob_start();
$host='triton.towson.edu:3360'; // Host name
$username='rfongh1'; // Mysql username
$password='Cosc*wdkf'; // Mysql password
$db_name="rfongh1db"; // Database name
$tbl_name="USERS"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = "myusername";
$_SESSION['mypassword'] = "mypassword";

header("location:../countdown/countdown.php");
}
else {
}
ob_end_flush();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>


  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="login-card">
    <h1>Peoplesoft v2</h1><br>
  <form method="post" action="login.php">
    <input type="text" name="myusername" id="myusername" placeholder="Username">
    <input type="password" name="mypassword" id="mypassword" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>

</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>


</body>
</html>
