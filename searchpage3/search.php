<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Course Directory</title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <h1 style = "padding-top:25px"><font color="black"> Course directory</font></h1>

  <?php include_once('../navbar.html') ?>

  <form action="search.php" method="post">
    <div id="search">
      <input type="text" name="search" placeholder="Example: 'Calculus 2'"/>
      <button type="submit"> <i class="fa fa-search"></i> </button>
    </div>
  </form>
  <div class="note">Hit enter to search</div>
  <br>
  <table>
    <thead>
      <tr>
        <th scope="col">Course Name</th>
        <th scope="col">Department</th>
        <th scope="col">Course Number</th>
        <th scope="col">Credit Hours</th>
      </tr>
    </thead>

    <tbody>
      <tr>

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
          $query = mysql_query("SELECT * FROM COURSE WHERE course_name LIKE '%$searchq%'");
          $count = mysql_num_rows($query);
          if($count == 0) {
            $output = "No search results";
          } else {
            while($row = mysql_fetch_array($query)) {
              $course_name = $row['course_name'];
              $course_number = $row['course_number'];
              $credit_hours = $row['credit_hours'];
              $fname = $row['fname'];
              $lname = $row['lname'];
              $department = $row['department'];
              $email = $row['email'];
              $office_hours = $row['office_hours'];
              echo '<tr>';
              echo '<td scope="row">' . $course_name. '</td>';
              echo '<td>' . $department. '</td>';
              echo '<td>' . $course_number. '</td>';
              echo '<td>' . $credit_hours. '</td>';
              echo '</tr>';
            }
          }
        }
        ?>
      </tr>
    </tbody>
  </table>
  <script src="js/index.js"></script>

</body>
</html>
