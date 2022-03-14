<div class="popular-post-wrap">
	<h4 class="title">Du lịch</h4>
	<div class="feature-post relative">
		<?php
			$i = 0;
			foreach ($xml_du_lich->xpath('//channel/item') as $items)
			{
		    if (($i == 1)) {
		      break;
		    }
		    if (strpos($items->description, "src=")) {
		        $str = explode('src=', $items->description);
				$str1 = explode('></a></br>', $str[1]);
		?>
		<div class="feature-img relative">
			<div class="overlay overlay-bg">
			</div>
			<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
		</div>
		<div class="details">
			<ul class="tags">
				<li><a href="#">Du lịch</a></li>
			</ul>
			<a href="<?php echo $items->link; ?>">
				<h3><?php echo $items->title; ?></h3>
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
				$i=1;
				}
				}
			?>
	</div>

	<div class="row mt-20 medium-gutters">
		<div class="col-lg-6 single-popular-post">
	        <?php
		        $i = 0;
		        foreach ($xml_du_lich->xpath('//channel/item') as $items)
		        {
			        if (($i == 2)) {
			            break;
			        }
			        if (strpos($items->description, "src=") && ($i != 1)) {
			            $i++;
			            continue;
			        }
			        if (strpos($items->description, "src=")) {
			            $str = explode('src=', $items->description);
						$str1 = explode('></a></br>', $str[1]);
	        ?>
			<div class="feature-img-wrap relative">
				<div class="feature-img relative">
					<div class="overlay overlay-bg"></div>
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
				</div>
				<ul class="tags">
					<li><a href="#">Du lịch</a></li>
				</ul>
			</div>
			<div class="details">
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
				<p class="excert">
					<?php echo $str1[1]; ?>
				</p>
			</div>
	        <?php
	        	$i=2;
	    		}
	    		}
			?>
		</div>

		<div class="col-lg-6 single-popular-post">
	        <?php
		        $i = 0;
		        foreach ($xml_du_lich->xpath('//channel/item') as $items)
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
						$str1 = explode('></a></br>', $str[1]);
	        ?>
			<div class="feature-img-wrap relative">
				<div class="feature-img relative">
					<div class="overlay overlay-bg"></div>
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
				</div>
				<ul class="tags">
					<li><a href="#">Du lịch</a></li>
				</ul>
			</div>
			<div class="details">
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
				<p class="excert">
					<?php echo $str1[1] ?>
				</p>
			</div>
		        <?php
			        $i=3;
			    	}
			    	}
		        ?>
		</div>
	</div>
</div>