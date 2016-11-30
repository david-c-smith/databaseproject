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
<?php include_once('../navbar.html') ?>
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
					<li class="single-event" data-start="08:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">COSC 457</em>
						</a>
					</li>

					<li class="single-event" data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">COSC 129</em>
						</a>
					</li>

					<li class="single-event" data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">COSC 134</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>



			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>


			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>


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
