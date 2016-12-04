<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="What, Would, You, Do, Here" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Edit Information</title>

  <!-- Bootstrap -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="editprofile.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
      <!-- edit form column -->
      <?php include_once("../navbar.html") ?>
      <div class="container" >
      <div class="col-md-7 col-sm-offset-3 vertical-center-row">
    <div class="panel panel-default"style="background:#ecf0f1">
       <div class="panel-body">
      <div class="personal-info">
        <div class="text-center" style="font-size:40px;padding-bottom:30px"><font color="black"><i class="fa fa-info-circle fa-lg" style="font-size:50px; padding-right:60px;vertical-align:8px;"></i>Edit information</font></div>
        <form class="form-horizontal" action="edit.php" method="post">
          <div class="form-group">
            <label class="col-md-5 control-label">Street address:</label>
            <div class="col-md-4">
              <input class="form-control" id="street_address" name="street_address" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-5 control-label">City:</label>
            <div class="col-md-4">
              <input class="form-control" id="city" name="city" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-5 control-label">State:</label>
            <div class="col-md-4">
              <input class="form-control" id="state" name="state" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-5 control-label">Country:</label>
            <div class="col-md-4">
              <input class="form-control" id="country" name="country" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-5 control-label">Zipcode:</label>
            <div class="col-md-4">
              <input class="form-control" id="zipcode" name="zipcode" type="text" value="">
            </div>
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-7 control-label"></label>
            <div class="col-md-2">
              <input type="submit" name="edit" id="edit" class="btn btn-success pull-right" value="Update information">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
