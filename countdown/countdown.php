<!DOCTYPE html>
<?php
$dbhost = 'triton.towson.edu:3360';
$dbuser = 'rfongh1';
$dbpass = 'Cosc*wdkf';
$dbname = 'rfongh1db';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
$output = '';

$query = mysql_query("SELECT grad_day,grad_month,grad_year FROM STUDENT WHERE student_id = '1'");
while($row = mysql_fetch_array($query)) {
  $grad_day = $row['grad_day'];
  $grad_month = $row['grad_month'];
  $grad_year = $row['grad_year'];
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Countdown</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Oswald:700'>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
</head>


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

<div class="timer">Time until graduation</div>


<body>
  <h1 id="countdown"></h1>

  <script>
  // set the date we're counting down to
  day = "<?php echo $grad_day?>";
  month = "<?php echo $grad_month?>";
  year = "<?php echo $grad_year?>";
  var target_date = new Date(month + " " + day + "," + year).getTime();

  // variables for time units
  var days, hours, minutes, seconds;

  // get tag element
  var countdown = document.getElementById("countdown");

  // update the tag with id "countdown" every 1 second
  setInterval(function () {

    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;

    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;

    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);

    // format countdown string + set tag value
    countdown.innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  }, 1000);

  </script>

</body>
</html>
