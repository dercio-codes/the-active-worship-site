<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Active Worship</title>
	<?php include 'incl/head_.php'; ?>
	<style type="text/css">
	</style>
</head>
<body>

<!--Header nav starts here-->
	<?php include 'incl/nav_.php'; ?>

<div class="container">

	<div class="row home-text-1 center">
		<div class="row fullimg">
			<h1 class="glitch">GET IN TOUCH</h1>
		</div>
	</div>
</div>

<div class="contactsect">
	<div class="row spacer"></div>
	<div class="row center">

		<div class="row spacer"></div>
		<div class="row contact">
		    <div class="col-md-6 col-md-offset-3">
		     <form action="Email/index.php" method="post">
		      <h2>For details on our events contact us at:</h2>
		    
		      Email:  info@activeworship.com<br>
		     
		      <h3>Email us</h3>
		      <input type="text" name="name" size="25" placeholder="Name"><br>
		      <input type="number" name="contactNo" size="25" placeholder="Contact Number"><br>
		      <input type="email" name="email" size="25" placeholder="Email"><br>
		      <textarea name="message" cols="25" rows="5" placeholder="Message"></textarea><br>
		      <input type="submit" value="Send">
		  </form>
		  </div>
		  

	</div>
</div>
</div>


<?php include 'incl/footer.php'; ?>
<?php include 'incl/scriptjs.php'; ?>
</body>
</html>