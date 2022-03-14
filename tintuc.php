<?php
  include 'data/getdataloaitin.php';
?>
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
		<title>Thời Sự</title>
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
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Tin <?php echo $_GET['tenloaitin']; ?></h4>
                <?php
                  if (isset($_GET['more']))
                  {
                    $i = 0;
                    foreach ($xml->xpath('//channel/item') as $items)
                    {
                      if ($i > $_GET['more']) {
                        break;
                      }
                      if (strpos($items->description, "src=")) {
                        $str = explode('src=', $items->description);
                        $str1 = explode('></a></br>', $str[1]);
                ?>
                <div class="single-latest-post row align-items-center">
                  <div class="col-lg-5 post-left">
                    <div class="feature-img relative">
                      <div class="overlay overlay-bg"></div>
                      <img class="img-fluid" src=<?php echo $str1[0]; ?> >
                    </div>
                    <ul class="tags">
                      <li><a href="#"><?php echo $_GET['tenloaitin']; ?></a></li>
                    </ul>
                  </div>
                  <div class="col-lg-7 post-right">
                    <a href="<?php echo $items->link; ?>">
                      <h4>
                        <?php echo $items->title; ?>
                      </h4>
                    </a>
                    <ul class="meta">
                      <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                        <?php echo $items->pubDate; ?>
                      </a></li>
                    </ul>
                    <p class="excert">
                      <?php echo  $str1[1]; ?>
                    </p>
                  </div>
                </div>
                <?php $i++;} }
                if ($_GET['more'] < 25) { ?>
                  <div class="load-more">
                    <a href=
						<?php
							$link = "tintuc.php?loaitin=".$_GET['loaitin']."&tenloaitin=".$_GET['tenloaitin']."&more=25";
							echo '"'.$link.'"'.'class="primary-btn"';
						?> >Xem Thêm
					</a>
                  </div>
                <?php
                  } }
                  else {
                    $i = 0;
                    foreach ($xml->xpath('//channel/item') as $items)
                    {
                      if (($i > 4)) {
                        break;
                      }
                      if (strpos($items->description, "src=")) {
                        $str = explode('src=', $items->description);
                        $str1 = explode('></a></br>', $str[1]);
                  ?>
                  <div class="single-latest-post row align-items-center">
                    <div class="col-lg-5 post-left">
                      <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
                      </div>
                      <ul class="tags">
                        <li><a href="#"><?php echo $_GET['tenloaitin']; ?></a></li>
                      </ul>
                    </div>
                    <div class="col-lg-7 post-right">
                      <a href="<?php echo $items->link; ?>">
                        <h4>
                          <?php echo $items->title; ?>
                        </h4>
                      </a>
                      <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                          <?php echo $items->pubDate; ?>
                        </a></li>
                      </ul>
                      <p class="excert">
                        <?php echo $str1[1]; ?>
                      </p>
                    </div>
                  </div>
                  <?php $i++;} }?>
                  <div class="load-more">
  									<a href=
	  									<?php
		  									$link = "tintuc.php?loaitin=".$_GET['loaitin']."&tenloaitin=".$_GET['tenloaitin']."&more=10";
		  									echo '"'.$link.'"'.'class="primary-btn"';
	  									?> >Xem Thêm
  									</a>
  								</div>
                  <?php } ?>

							</div>
							<!-- End latest-post Area -->
						</div>
            <div class="col-lg-4">
							<div class="sidebars-area">

								<!-- START ENTERTAIMENT POST -->
                <?php
                  include 'layoutcontent/entertainment.php';
                ?>
								<!-- START FUNPOST POST -->
                <?php
                  include 'layoutcontent/funpost.php';
                ?>
                <!-- START FUNPOST POST -->

								<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Mạng Xã Hội</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
												<p>4.741 Likes</p>
											</div>
											<a href="https://www.facebook.com/TPLShipping">Like our page</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
												<p>100 Subscriber</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>

		<!-- start footer Area -->
    <?php
      include 'layout/footer.php';
    ?>
		<!-- End footer Area -->
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
