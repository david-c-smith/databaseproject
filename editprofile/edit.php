<?php
  $dbhost = 'triton.towson.edu:3360';
  $dbuser = 'rfongh1';
  $dbpass = 'Cosc*wdkf';
  $dbname = 'rfongh1db';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname);

  if(isset($_POST['edit'])) {
  $street = $_POST['street_address'];
  $zip = $_POST['zipcode'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $query = mysql_query("UPDATE ADDRESS SET street_address = '$street' , zipcode = '$zip', country = '$country' , state = '$state', city='$city' WHERE student_id='0548314'");
  }
  include_once("./editprofile.php");
?>
