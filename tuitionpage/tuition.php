<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Account Finances</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!---       START NAV        -->

  </div><nav class="main-menu">
    <div>
      <a class="logo" href="">
      </a>
    </div>
    <div class="settings"></div>
    <div class="scrollbar" id="style-1">

      <ul>

        <li>
          <a href="">
            <i class="fa fa-home fa-lg"></i>
            <span class="nav-text">Home</span>
          </a>
        </li>

        <li>
          <a href="">
            <i class="fa fa-user fa-lg"></i>
            <span class="nav-text">Login</span>
          </a>
        </li>


        <li>
          <a href="">
            <i class="fa fa-envelope-o fa-lg"></i>
            <span class="nav-text">Contact</span>
          </a>
        </li>

      <li class="darkerli">
        <a href="/tuitionpage/tuition.php">
          <i class="fa fa-dollar fa-lg"></i>
          <span class="nav-text">Account Finances</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="">
          <i class="fa fa-calendar fa-lg"></i>
          <span class="nav-text">Schedule</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="/searchpage1/search.php">
          <i class="fa fa-graduation-cap fa-lg"></i>
          <span class="nav-text">Student directory</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="/searchpage2/search.php">
          <i class="fa fa-male fa-lg" aria-hidden="true"></i>
          <span class="nav-text">Professor directory</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="/countdown/countdown.php">
          <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
          <span class="nav-text">Graduation countdown</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="">
          <i class="fa fa-align-left fa-lg"></i>
          <span class="nav-text">Magazines
          </span>
        </a>
      </li>

      <li class="darkerli">
        <a href="">
          <i class="fa fa-gamepad fa-lg"></i>
          <span class="nav-text">Games</span>
        </a>
      </li>

      <li class="darkerli">
        <a href="">
          <i class="fa fa-glass fa-lg"></i>
          <span class="nav-text">Life & Style
          </span>
        </a>
      </li>

      <li class="darkerlishadowdown">
        <a href="">
          <i class="fa fa-rocket fa-lg"></i>
          <span class="nav-text">Fun</span>
        </a>
      </li>


    </ul>
    <ul class="logout">
    </ul>
  </nav>

  <!---       END NAV        -->

  <?php
  $dbhost = 'triton.towson.edu:3360';
  $dbuser = 'rfongh1';
  $dbpass = 'Cosc*wdkf';
  $dbname = 'rfongh1db';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname);

  $query1 = "SELECT account_balance FROM TUITION WHERE student_id = '1'";
  $query2 = "SELECT pending_aid FROM TUITION WHERE student_id = '1'";
  $query3 = "SELECT (account_balance - pending_aid) FROM TUITION WHERE student_id = '1'";

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
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
