<!DOCTYPE html>
<html>
<head>
	<title>Events - Active Worship</title>
	<?php include 'incl/head.php'; ?>
	<style type="text/css">
	</style>
</head>
<body class="backgroundimg">

<!--Header nav starts here-->
	<?php include 'incl/nav.php'; ?>

<div class="container">

	<?php #include 'incl/nav.php'; ?>

		<div class="row home-text center">
		<!---<div class="row fullimg">
		</div>-->
		<h1><strong>Join Active Worship @</strong></h1>
		<h2><strong>ACTIVE YOUTH PROJECT 1000</strong></h2>
		<h2><strong>26 November 2016</strong></h2>
		<h2><strong>@ 4pm</strong></h2>

	<div class="countdown">
		<ul id="example">
              <li style="list-style: ;">
              <span class="days">00</span><strong> :</strong> <span class="days_text" style="color: #fff">Days</span> <span class="hours">00</span><strong> :</strong> <span class="hours_text" style="color:#fff" Style="font-size:30px;">Hours</span> <span class="minutes">00</span><strong> : <span class="minutes_text" style="color: #fff">Minutes</span> <span class="seconds">00</span><strong> :</strong> <span class="seconds_text" style="color: #fff">Seconds</span>
              </li>             
        </ul>
	</div>
	<br>
	<div class="">
		<iframe width="600" height="400" src="https://www.youtube.com/embed/Nk61_S0HsZE" frameborder="0" allowfullscreen></iframe>
	</div>
		<br><br>
		<div class="social col-md-3 col-md-offset-3 homesocial">
			<a href="https://www.facebook.com/ActiveWorship/" target="blank"><i class="fa fa-facebook fa-2x"></i></a>
			<a href="https://twitter.com/ActiveWorship" target="blank"><i class="fa fa-twitter fa-2x"></i></a>
			<a href="https://www.youtube.com/user/TheActiveWorship" target="blank"><i class="fa fa-youtube fa-2x"></i></a>
			<a href="https://instagram.com/ActiveWorship "><i class="fa fa-instagram fa-2x"></i></a>
		</div>
	</div>

</div>

</div>
</div>
</div>


<?php include 'incl/scriptjs.php'; ?>
<script src="js/jquery.countdown.min.js"></script>
<script>
	var live_feed = $('.live_link');
	live_feed.hide();
	$('#example').countdown({
	date: '11/26/2016 16:00:00'
	}, function () {
		var cont = $('.yputube_vid');
		cont.css('display','none');
	  //alert('Merry Christmas!');
	  live_feed.fadeIn();
	});
</script>
</body>
</html>