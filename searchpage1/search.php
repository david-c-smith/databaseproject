<?php
$dbhost = 'triton.towson.edu:3360';
$dbuser = 'rfongh1';
$dbpass = 'Cosc*wdkf';
$dbname = 'rfongh1db';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
$output = '';

if(isset($_POST['search'])) {
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i"," ",$searchq);
  $query = mysql_query("SELECT * FROM STUDENT WHERE CONCAT(fname, ' ', lname) LIKE '%$searchq%'");
  $count = mysql_num_rows($query);
  if($count == 0) {
    $output = "No search results";
  } else {
    while($row = mysql_fetch_array($query)) {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $major = $row['major'];
      $gpa = $row['gpa'];
      $email = $row['email'];
      $output .= '<div>' .$fname.' '.$lname.'  '.$major.'  '.$gpa. '</div>';
    }
  }
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Student Directory</title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">

</head>
<h1 style = "padding-top:200px"><font color="black"> Student directory</font></h1>

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

  <form action="search.php" method="post">
    <div id="search">
      <input type="text" name="search" placeholder="Example: 'Dave Smith'"/>
      <button type="submit"> <i class="fa fa-search"></i> </button>
    </div>
  </form>
  <div class="note">Hit enter to search</div>
  <br>
  <table>
        <thead>
          <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Major</th>
            <th scope="col">Email</th>
            <th scope="col">GPA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th scope="row"><?php echo $fname ?></th>
            <td><?php echo $lname  ?></td>
            <td><?php echo $major ?></td>
            <td><?php echo $email?></td>
            <td><?php echo $gpa?></td>

          </tr>
        </tbody>
      </table>
  <script src="js/index.js"></script>

</body>
</html>
