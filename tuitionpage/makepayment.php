<?php
  $dbhost = 'triton.towson.edu:3360';
  $dbuser = 'rfongh1';
  $dbpass = 'Cosc*wdkf';
  $dbname = 'rfongh1db';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname);
  $query1 = "SELECT account_balance FROM TUITION WHERE student_id = '0548314'";
  $result1 = mysql_query($query1);
  $row1 = mysql_fetch_assoc($result1);
  $balance = $row1['account_balance'];

  if(isset($_POST['makepayment'])) {
  $payq = $_POST['makepayment'];
  $query = mysql_query("UPDATE TUITION SET account_balance = $balance - $payq WHERE student_id='0548314'");
  }
  include_once("tuition.php");

?>
