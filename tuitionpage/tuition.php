<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script src = "jquery-1.9.1.js"></script>
  <title>Account Finances</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include_once('../navbar.html') ?>

  <?php
  $dbhost = 'triton.towson.edu:3360';
  $dbuser = 'rfongh1';
  $dbpass = 'Cosc*wdkf';
  $dbname = 'rfongh1db';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname);

  $query1 = "SELECT account_balance FROM TUITION WHERE student_id = '0548314'";
  $query2 = "SELECT pending_aid FROM TUITION WHERE student_id = '0548314'";
  $query3 = "SELECT (account_balance - pending_aid) FROM TUITION WHERE student_id = '0548314'";

  $result1 = mysql_query($query1);
  $result2 = mysql_query($query2);
  $result3 = mysql_query($query3);

  $row1 = mysql_fetch_assoc($result1);
  $row2 = mysql_fetch_assoc($result2);
  $row3 = mysql_fetch_assoc($result3);
  ?>

  <div class='main-wrapper'>
  <div class='app-wrapper'>
    <div class='app'>
      <h1 style><font color="black"> Account finances</font></h1>
      <br>
      <div class='app-body'>
        <div class='app-header'>
          <div class='header-label'><b>Your account<b></div>
          <div class='header-logo'><img src='http://ian.umces.edu/imagelibrary/albums/userpics/101505/normal_ian-symbol-dollar-sign.png' /></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Account balance</div>
          <div class='row-amount'><?php echo $row1["account_balance"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Pending aid</div>
          <div class='row-amount'><?php echo $row2["pending_aid"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Balance due</div>
          <div class='row-amount'><?php echo $row3["(account_balance - pending_aid)"];?></div>
        </div>
      </div>
      <div class="container">
        <form action="makepayment.php" method="post">
          <div id="makepayment">
            <input type="text" name="makepayment" placeholder="Enter payment amount"/>
    		<button class="btn" type="submit"> Make payment</button>
      </form>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
