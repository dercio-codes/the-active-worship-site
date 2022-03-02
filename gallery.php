<!DOCTYPE html>
<html>
<head>
	<title>Gallery - Active Worship</title>
	<?php include 'incl/head.php'; ?>
	<link rel="stylesheet" href="css/glisse.css" />
	<style type="text/css">
	</style>
</head>
<body>

<!--Header nav starts here-->
	<?php include 'incl/nav.php'; ?>
<div class="team">
<div class="container">
		
	</div>
	<div class="row spacer"></div>
		<div class="row">
			
			<div class="row spacer"></div>
			<div class="row gallery">

				<div class="col-md-4 fullimg">
					<img src="img/gallery/1.jpg" class="galleryImg" data-glisse-big="img/gallery/1.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/2.jpg" class="galleryImg"  data-glisse-big="img/gallery/2.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/3.jpg" class="galleryImg"  data-glisse-big="img/gallery/3.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/4.jpg" class="galleryImg"  data-glisse-big="img/gallery/4.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/5.jpg" class="galleryImg"  data-glisse-big="img/gallery/5.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/6.jpg" class="galleryImg"  data-glisse-big="img/gallery/6.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/7.jpg" class="galleryImg"  data-glisse-big="img/gallery/7.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/8.jpg" class="galleryImg"  data-glisse-big="img/gallery/8.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/9.jpg" class="galleryImg"  data-glisse-big="img/gallery/9.jpg"  rel="group1">
				</div>	
				<div class="col-md-4 fullimg">
					<img src="img/gallery/10.jpg" class="galleryImg"  data-glisse-big="img/gallery/10.jpg"  rel="group1">
				</div>		

			</div>

	</div>
</div>

<?php include 'incl/footer.php'; ?>
<?php include 'incl/scriptjs.php'; ?>
<script src="js/glisse.js"></script>
<script>
            $(function () {
                
                $('.galleryImg').glisse({
	                changeSpeed: 550, 
	                speed: 500,
	                effect:'bounce'
	            });
            });
        </script>
</body>
</html>