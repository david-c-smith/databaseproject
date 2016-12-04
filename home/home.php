<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>
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

  $query1 = "SELECT fname,lname FROM STUDENT WHERE student_id = '0548314'";
  $query2 = "SELECT major FROM STUDENT WHERE student_id = '0548314'";
  $query3 = "SELECT gpa FROM STUDENT WHERE student_id = '0548314'";
  $query4 = "SELECT * FROM ADDRESS WHERE student_id = '0548314'";


  $result1 = mysql_query($query1);
  $result2 = mysql_query($query2);
  $result3 = mysql_query($query3);
  $result4 = mysql_query($query4);

  $row1 = mysql_fetch_assoc($result1);
  $row2 = mysql_fetch_assoc($result2);
  $row3 = mysql_fetch_assoc($result3);
  $row4 = mysql_fetch_assoc($result4);

  $query = mysql_query("SELECT * FROM PLANNER p INNER JOIN PROFESSOR pro on p.professor_id=pro.professor_id WHERE student_id='0548314'");
  while($row = mysql_fetch_array($query)) {
    $enroll_date = $row['enroll_date'];
    $department = $row['department'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
  }
  ?>

  <div class='main-wrapper'>
  <div class='app-wrapper'>
    <div class='app'>
      <br>
      <div class='app-body'>
        <div class='app-header'>
          <div class='header-label'><b>Student Information<b></div>
          <div class='header-logo'><img src='https://mdsoar.org/themes/TowsonUniversity//images/community_logo.png' /></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Student Name</div>
          <div class='row-amount'><?php echo $row1["fname"]. " ". $row1["lname"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Major</div>
          <div class='row-amount'><?php echo $row2["major"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Address </div>
          <div class='row-amount'><?php echo $row4["street_address"] .",";?></div>
          <div class='row-amount'><?php echo $row4["city"]. " ". $row4["state"]. " " .$row4["zipcode"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>GPA</div>
          <div class='row-amount'><?php echo $row3["gpa"];?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Enrollment date</div>
          <div class='row-amount'><?php echo $enroll_date;?></div>
        </div>
        <div class='app-header'>
          <div class='header-label'><b>Advisor Information<b></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Advisor Name</div>
          <div class='row-amount'><?php echo $fname. " ". $lname;?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Department</div>
          <div class='row-amount'><?php echo $department;?></div>
        </div>
        <div class='app-row'>
          <div class='row-label'>Email</div>
          <div class='row-amount'><?php echo '<a href=mailto:'."$email".'>'. $email?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class='main-wrapper'>
<div class='app-wrapper'>
  <div class='app'>
    <br>
      <div class='app-header'>
        <div class='header-label'><b>Advisor Information<b></div>
      </div>
      <div class='app-row'>
        <div class='row-label'>Advisor Name</div>
        <div class='row-amount'><?php echo $fname. " ". $lname;?></div>
      </div>
      <div class='app-row'>
        <div class='row-label'>Department</div>
        <div class='row-amount'><?php echo $department;?></div>
      </div>
      <div class='app-row'>
        <div class='row-label'>Email</div>
        <div class='row-amount'><?php echo '<a href=mailto:'."$email".'>'. $email?></div>
      </div>
    </div>
  </div>
</div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
