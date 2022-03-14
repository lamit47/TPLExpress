<!-- Start top-post Area -->
<section class="top-post-area pt-10">

	<div class="container no-padding">

		<div class="row small-gutters">

			<div class="col-lg-8 top-post-left">
				<?php
					$i = 0;
					foreach ($xml_so_hoa->xpath('//channel/item') as $items)
					{
					if (($i == 1)) {
						break;
					}
					if (strpos($items->description, "src=")) {
						$str = explode('src=', $items->description);
						$str1 = explode('></a>', $str[1]);
				?>
				<div class="feature-image-thumb relative">
					<div class="overlay overlay-bg"></div>
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
				</div>
				<div class="top-post-details">
					<ul class="tags">
						<li><a href="#">Hot</a></li>
					</ul>
					<a href="<?php echo $items->link; ?>">
						<h3><?php echo $items->title; ?></h3>
					</a>
					<ul class="meta">
						<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $items->pubDate; ?></a></li>
					</ul>
				</div>
				<?php
					$i=1;
					}
					}
				?>
			</div>

			<div class="col-lg-4 top-post-right">

				<div class="single-top-post">
				    <?php
					    $i = 0;
					    foreach ($xml_so_hoa->xpath('//channel/item') as $items)
					    {
					    	if (($i == 2)){
					        	break;
					      	}
					    	if (strpos($items->description, "src=") && ($i != 1)) {
						        $i++;
						        continue;
					      	}
					      	if (strpos($items->description, "src=")) {
							    $str = explode('src=', $items->description);
							    $str1 = explode('></a>', $str[1]);
				    ?>
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src=<?php echo $str1[0].'"'; ?>>
					</div>
					<div class="top-post-details">
						<ul class="tags">
							<li><a href="#">Hot</a></li>
						</ul>
						<a href="<?php echo $items->link; ?>">
							<h4><?php echo $items->title; ?></h4>
						</a>
						<ul class="meta">
							<li>
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									<?php echo $items->pubDate; ?>
								</a>
							</li>
						</ul>
					</div>
	    			<?php
	    				$i=2;
	    				} 
	    				}
					?>
				</div>

				<div class="single-top-post mt-10">
				    <?php
					    $i = 0;
					    foreach ($xml_so_hoa->xpath('//channel/item') as $items)
					    {
					    if (($i == 3)) {
					        break;
					      }
					    if (strpos($items->description, "src=") && ($i != 2)) {
					        $i++;
					        continue;
					      }
					    if (strpos($items->description, "src=")) {
					        $str = explode('src=', $items->description);
					      	$str1 = explode('></a>', $str[1]);
				    ?>
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src=<?php echo $str1[0].'"'; ?>>
					</div>
					<div class="top-post-details">
						<ul class="tags">
							<li><a href="#">Hot</a></li>
						</ul>
						<a href="<?php echo $items->link; ?>">
							<h4><?php echo $items->title; ?></h4>
						</a>
						<ul class="meta">
							<li>
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									<?php echo $items->pubDate; ?>
								</a>
							</li>
						</ul>
					</div>
	    			<?php
	    				$i=3;
	    				} 
	    				} 
	    			?>
				</div>
			</div>
			<div class="col-lg-12">
			</div>
		</div>
	</div>
</section>
<!-- End top-post Area -->