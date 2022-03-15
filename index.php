<?php include 'data/getdata.php'; ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>TPLExpress</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

		<!-- START HEADER -->
		<?php
			include 'layout/header.php';
		?>
		<!-- END HEADER -->

		<div class="site-main-container">

			<!-- START HOT POST -->
			<?php
				include 'layoutcontent/toppost.php';
			?>
			<!--END HOT POST -->

			<section class="latest-post-area pb-120">

				<div class="container no-padding">

					<div class="row">

						<div class="col-lg-8 post-list">

							<!-- START LATEST POST -->
							<?php
								include 'layoutcontent/latestpost.php';
							?>
							<!-- END LATEST POST -->

							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/baner.png" alt="">
							</div>
							<!-- End banner-ads Area -->

							<!-- START TRAVEL AND SPORT POST -->
							<?php 
								include 'layoutcontent/travelpost.php';
								include 'layoutcontent/sportpost.php';
							?>
							<!-- END TRAVEL AND SPORT POST -->

						</div>

						<div class="col-lg-4">

							<div class="sidebars-area">

								<!-- START ENTERTAIMENT POST -->
								<?php
									include 'layoutcontent/entertainment.php';
								?>
								<!-- START ENTERTAIMENT POST -->

								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="img/baner.jpg" alt="">
								</div>
								<!-- START FUNPOST POST -->
								<?php
									include 'layoutcontent/funpost.php';
								?>
								<!-- START FUNPOST POST -->

							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- START FOOTER -->
		<?php
			include 'layout/footer.php';
		?>
		<!-- END FOOTER -->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
