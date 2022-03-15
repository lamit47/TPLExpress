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
		<link rel="icon" href="data:image/jpeg;base64,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" type="img/baner.png"/>
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
