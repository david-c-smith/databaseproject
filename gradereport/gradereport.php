<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Grade report</title>

  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <table style="margin:auto">
  <caption><font color="black"><i class="fa fa-check fa-lg" style="font-size:100px;padding-right:20px;"></i>Grade report</font></h1>
</caption>
  <thead>
    <tr>
      <th scope="col">Course name</th>
      <th scope="col">Instructor</th>
      <th scope="col">Credits</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once('../navbar.html');
  $dbhost = 'triton.towson.edu:3360';
  $dbuser = 'rfongh1';
  $dbpass = 'Cosc*wdkf';
  $dbname = 'rfongh1db';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname);
  $query = mysql_query("SELECT * FROM GRADE_REPORT gr INNER JOIN SECTION s on gr.section_id=s.section_id INNER JOIN PROFESSOR p on gr.professor_id=p.professor_id INNER JOIN COURSE c on gr.course_id=c.course_id WHERE student_id='0548314';");
  while($row = mysql_fetch_array($query)) {
    $course_name = $row['course_name'];
    $credit_hours = $row['credit_hours'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $grade = $row['grade'];
    echo '<tr>';
    echo '<td scope="row" class="overflow-visible" style="padding-right:60px">' .$course_name. '</td>';
    echo '<td>'.$fname. " ".$lname.'</td>';
    echo '<td>'.$credit_hours.'</td>';
    echo '<td>'.$grade.'</td>';
    echo '</tr>';
}
  ?>
  </tbody>
</table>
    <script src="js/index.js"></script>

</body>
</html>
