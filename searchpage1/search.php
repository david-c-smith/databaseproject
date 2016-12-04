<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Student Directory</title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <h1 style = "padding-top:25px; padding-right:30px;"><font color="black"><i class="fa fa-graduation-cap fa-lg" style="font-size:100px"></i>Student directory</font></h1>

<?php include_once('../navbar.html') ?>

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
            <th scope="col">GPA</th>
            <th scope="col">Email</th>
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
              $query = mysql_query("SELECT * FROM STUDENT WHERE CONCAT(fname, ' ', lname) LIKE '%$searchq%' or major LIKE '%$searchq%' or gpa LIKE '%$searchq%' or email LIKE '%$searchq%'");
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
                  echo '<tr>';
                  echo '<td scope="row">' . $fname. '</td>';
                  echo '<td>' . $lname. '</td>';
                  echo '<td>' . $major. '</td>';
                  echo '<td>' . $gpa. '</td>';
                  echo '<td>' . '<a href=mailto:'."$email".'>'. $email   . '</td>';
                  echo '</tr>';
                  $output .= '<div>' .$fname.' '.$lname.'  '.$major.'  '.$gpa. '</div>';
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
