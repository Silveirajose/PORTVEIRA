<?php require_once("header.php")?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Dev-Front-end</title>
		<link rel="icon" href="img/logored.png">
		<link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icon Font -->
		<link rel="stylesheet" href="css/fontawesome-all.min.css">
		<link href="https://fonts.googleapis.com/css?family=Courgette|Graduate|Lobster" rel="stylesheet">
		
		
	</head>
	<body>
	
		<!--PORTIFOLIO-->
		<article class="container">
			<h1 align="center"
			>Portfolio</h1>
			<section class="col">
				<div class="row port">
					
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a href="Port/Site-games/index.html">
									<img class="d-block w-100" src="img/Site (1).png" alt="First slide">
								</a>
							</div>
							<div class="carousel-item">
								<a href="Port/Site-pizza/index.html">
									<img class="d-block w-100" src="img/Site (2).png" alt="Second slide">
								</a>
							</div>
							<div class="carousel-item">
								<a href="Port/Site-cinemas/index.html">
									<img class="d-block w-100" src="img/Site (3).png" alt="Third slide">
								</a>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</section>
		</article >
		<?php require_once("footer.php")?>
		<!-- Jquery -->
		<script src="js/jquery-3.3.1.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Script -->
		<script src="js/script.js"></script>
	</body>
</html>