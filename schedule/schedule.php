<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Your schedule</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php include_once('../navbar.html');?>

<h1 style = "padding-top:25px; padding-left:450px;"><font color="black"><i class="fa fa-calendar fa-lg" style="font-size:70px;padding-right:40px;vertical-align:middle"></i>Your Schedule</font></h1>

<body>
  <div class="cd-schedule loading">
    <div class="timeline">
      <ul>
        <li><span>08:00</span></li>
        <li><span>08:30</span></li>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>1:00</span></li>
        <li><span>1:30</span></li>
        <li><span>2:00</span></li>
        <li><span>2:30</span></li>
        <li><span>3:00</span></li>
        <li><span>3:30</span></li>
        <li><span>4:00</span></li>
        <li><span>4:30</span></li>
        <li><span>5:00</span></li>
        <li><span>5:30</span></li>
        <li><span>6:00</span></li>
        <li><span>6:30</span></li>
        <li><span>7:00</span></li>
        <li><span>7:30</span></li>
        <li><span>8:00</span></li>
        <li><span>8:30</span></li>
        <li><span>9:00</span></li>
        <li><span>9:30</span></li>
        <li><span>10:00</span></li>
      </ul>
    </div> <!-- .timeline -->

    <div class="events">

      <ul>

        <li class="events-group">
          <div class="top-info"><span>Monday</span></div>
          <ul>
            <?php
            $dbhost = 'triton.towson.edu:3360';
            $dbuser = 'rfongh1';
            $dbpass = 'Cosc*wdkf';
            $dbname = 'rfongh1db';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            mysql_select_db($dbname);
            $query = mysql_query("SELECT * FROM SCHED sched INNER JOIN SECTION s on sched.section_id=s.section_id INNER JOIN COURSE c on sched.course_id=c.course_id INNER JOIN PROFESSOR p on sched.professor_id=p.professor_id WHERE student_id='0548314'");
            while($row = mysql_fetch_array($query)) {
            	if($row['day_one'] == 'Monday') {
              $start_time = $row['start_time'];
              $end_time = $row['end_time'];
              $course_name = $row['course_name'];
              $department = $row['department'];
              $course_number = $row['course_number'];
              $fname = $row['fname'];
              $lname = $row['lname'];
              $section = $row['section_id'];
            echo '<li class="single-event" data-start="'.$start_time.'" data-end="'.$end_time.'" data-content="" data-event="event-1">';
            echo '<a href="#0">';
            echo '<em class="event-name">'.$department . " " .$course_number. "." .$section.'</em>';
            echo '<br>';
            echo 'Instructor';
            echo '<em class="event-name">'.$fname." ".$lname.'</em>';
            echo '<br>';
            echo '</a>';
            echo '</li>';
        	}
          }
            ?>
          </ul>
        </li>


        <li class="events-group">
          <div class="top-info"><span>Tuesday</span></div>
          <ul>
          <?php
          $query = mysql_query("SELECT * FROM SCHED sched INNER JOIN SECTION s on sched.section_id=s.section_id INNER JOIN COURSE c on sched.course_id=c.course_id INNER JOIN PROFESSOR p on sched.professor_id=p.professor_id WHERE student_id='0548314'");
          while($row = mysql_fetch_array($query)) {
          	if($row['day_one'] == 'Tuesday') {
            $start_time = $row['start_time'];
            $end_time = $row['end_time'];
            $course_name = $row['course_name'];
            $department = $row['department'];
            $course_number = $row['course_number'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $section = $row['section_id'];
          echo '<li class="single-event" data-start="'.$start_time.'" data-end="'.$end_time.'" data-content="" data-event="event-1">';
          echo '<a href="#0">';
          echo '<em class="event-name">'.$department . " " .$course_number. "." .$section.'</em>';
          echo '<br>';
          echo 'Instructor';
          echo '<em class="event-name">'.$fname." ".$lname.'</em>';
          echo '<br>';
          echo '</a>';
          echo '</li>';
          	}
          }
          ?>
        </ul>
        </li>

        <li class="events-group">
          <div class="top-info"><span>Wednesday</span></div>
          <ul>
          <?php
          $query = mysql_query("SELECT * FROM SCHED sched INNER JOIN SECTION s on sched.section_id=s.section_id INNER JOIN COURSE c on sched.course_id=c.course_id INNER JOIN PROFESSOR p on sched.professor_id=p.professor_id WHERE student_id='0548314'");
          while($row = mysql_fetch_array($query)) {
          	if($row['day_two'] == 'Wednesday') {
            $start_time = $row['start_time'];
            $end_time = $row['end_time'];
            $course_name = $row['course_name'];
            $department = $row['department'];
            $course_number = $row['course_number'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $section = $row['section_id'];
          echo '<li class="single-event" data-start="'.$start_time.'" data-end="'.$end_time.'" data-content="" data-event="event-1">';
          echo '<a href="#0">';
          echo '<em class="event-name">'.$department . " " .$course_number. "." .$section.'</em>';
          echo '<br>';
          echo 'Instructor';
          echo '<em class="event-name">'.$fname." ".$lname.'</em>';
          echo '<br>';
          echo '</a>';
          echo '</li>';
      		}
          }
          ?>
        </ul>
        </li>

        <li class="events-group">
          <div class="top-info"><span>Thursday</span></div>
          <ul>
          <?php
          $query = mysql_query("SELECT * FROM SCHED sched INNER JOIN SECTION s on sched.section_id=s.section_id INNER JOIN COURSE c on sched.course_id=c.course_id INNER JOIN PROFESSOR p on sched.professor_id=p.professor_id WHERE student_id='0548314'");
          while($row = mysql_fetch_array($query)) {
          	if($row['day_one'] == 'Thursday' || $row['day_two'] == 'Thursday') {
            $start_time = $row['start_time'];
            $end_time = $row['end_time'];
            $course_name = $row['course_name'];
            $department = $row['department'];
            $course_number = $row['course_number'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $section = $row['section_id'];
          echo '<li class="single-event" data-start="'.$start_time.'" data-end="'.$end_time.'" data-content="" data-event="event-1">';
          echo '<a href="#0">';
          echo '<em class="event-name">'.$department . " " .$course_number. "." .$section.'</em>';
          echo '<br>';
          echo 'Instructor';
          echo '<em class="event-name">'.$fname." ".$lname.'</em>';
          echo '<br>';
          echo '</a>';
          echo '</li>';
      		}
          }
          ?>
        </ul>
        </li>

        <li class="events-group">
          <div class="top-info"><span>Friday</span></div>
        </li>
      </ul>
    </div>

    <div class="event-modal">
      <header class="header">
        <div class="content">
          <span class="event-date"></span>
          <h3 class="event-name"></h3>
        </div>

        <div class="header-bg"></div>
      </header>

      <div class="body">
        <div class="event-info"></div>
        <div class="body-bg"></div>
      </div>

      <a href="#0" class="close">Close</a>
    </div>

    <div class="cover-layer"></div>
  </div> <!-- .cd-schedule -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
