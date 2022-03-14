<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<h4 class="cat-title">Tin Mới Nhất</h4>
	<?php
	$i = 0;
	foreach ($xml->xpath('//channel/item') as $items)
	{
		if (($i > 4)) {
			break;
		}
		if (strpos($items->description, "src=") && ($i < 6)) {
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
				<li><a href="#">Tin mới nhất</a></li>
			</ul>
		</div>
		<div class="col-lg-7 post-right">
			<a href="<?php echo $items->link; ?>">
				<h4>
					<?php echo $items->title; ?>
				</h4>
			</a>
			<ul class="meta">
				<!-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li> -->
				<li><a href="#"><span class="lnr lnr-calendar-full"></span>
					<?php echo $items->pubDate; ?>
				</a></li>
				<!-- <li><a href="#"><span class="lnr lnr-bubble"></span>Comments</a></li> -->
			</ul>
			<p class="excert">
				<?php echo $str1[1]; ?>
			</p>
		</div>
	</div>
	<?php $i++;} } ?>
</div>
<!-- End latest-post Area -->