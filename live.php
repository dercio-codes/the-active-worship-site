<?php 
		error_reporting(0); 
		$live = "active";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<title>Live Broadcast | Active FM</title>
	<?php include 'incl/head.php'; ?>
	<style>
		body{
			background: url("img/background/pexels4.jpg") center  no-repeat fixed center;
			background-size: cover;
		}
		/*iframe{
			height: 100%;
			width: 100%;
			background-size: contain;
		}*/
		ul#example {
		  list-style: none;
		  padding: 0;
		  display: block;
		  text-align: center;
		}

		ul#example li { display: inline-block; }

		ul#example li span {
		  font-size: 30px;
		  font-weight: 300;
		  line-height: 80px;
			color: #333;
		}

		ul#example li.seperator {
		  font-size: 30px;
		  line-height: 70px;
		}

		ul#example li p {
		  color: #a7abb1;
		  font-size: 25px;
		}
		p{
			color: #333;
		}
		.page-header{
			margin: 0px;
		}
		.page-header h1{
			margin-top: 0px;
		}
		.jumbotron {
			padding: 48px 0px;
		}
		.jumbotron {
			margin-bottom: 30px;
			color: inherit;
			width: 80%;
		margin: 3% auto;;
			background-color: transparent;
		}
		.jumbotron .btn-primary {
			/*width: 300px;*/
			height: 50px;
			border: medium none;
			background: none repeat scroll 0% 0% #000;
		}
		.main_topimg_inner{
			background-color: #EEE;
			padding: 30px 15px;
			text-align: center;;
		}
		.main_topimg_inner h1{
			color: orangered;
		}
		.live_link{
			margin-bottom: 50px;
			display: block;
		}
	</style>
</head>
<body>
	<?php include 'incl/nav.php'; ?>
<!--Header nav starts here-->
<?php //include 'incl/nav.php';
	$_SERVER['HTTP_REFERER'] ? $previousUrl = $_SERVER['HTTP_REFERER'] : $previousUrl = 'index.php';

?>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">The Jesus Project</h4>
      </div>
      <div class="modal-body">
        <p>
        	This is a live stream of a service at The Active Church situated at 26A Loveday Street South, Selby, Johannesburg.
        </p>
      </div>
    </div>
  </div>
</div>

	<!-- Main image on to starts here  -->
	<div class="jumbotron main_topimg">
		<div class="main_topimg_inner col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12">
			<ul id="example">
			  <li><span class="days">00</span><p class="days_text">Days</p></li>
			  <li class="seperator">:</li>
			  <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
			  <li class="seperator">:</li>
			  <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
			  <li class="seperator">:</li>
			  <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
			</ul>
			<div class="container">
			<div class="page-header">
			    <!--	<h1>Active FM<br> <small></small></h1> -->
			    
				<div class="live_link">
					
					<iframe width="560" height="400" src="https://www.youtube.com/embed/2cws8Fop5-M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			 <!--  <p><a class="btn btn-primary btn-lg" href="<?php echo $previousUrl; ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Go back</a></p> -->
		</div>
	</div>

	</div>

</body>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script>


	if(live_feed != '03/13/2020 16:30:00'){
		var live_feed = $('.live_link');
  		var yputube_vid = $('.yputube_vid');
		  live_feed.show(); //live_feed.hide();
		  $('#example').countdown({
		  date: '03/13/2020 16:30:00'
		  }, function () {
		    var cont = $('.count_text');
		    cont.text('We are currently broadcasting Live.');
		    //alert('Merry Christmas!');
		    // yputube_vid.hide();
		    live_feed.fadeIn();
		  })

		
	}else{
	var obj = {"video": {
	 	 "value": '<iframe width="560" height="315" src="https://www.youtube.com/embed/2cws8Fop5-M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
			}}
			document.write(obj.video.value);
		}
  


</script>
</html>
