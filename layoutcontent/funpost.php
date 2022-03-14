<div class="single-sidebar-widget most-popular-widget">
	<h6 class="title">Tin Vui</h6>
	<?php
		$i = 0;
			foreach ($xml_cuoi->xpath('//channel/item') as $items)
		{
		if (($i > 2)) {
			break;
		}
		if (strpos($items->description, "src=") && ($i < 6)) {
			$str = explode('src=', $items->description);
			$str1 = explode('></a></br>', $str[1]);
			$src = $str1[0];
			$time = substr($items->pubDate, 0, 11);
	?>
			<div class="single-list flex-row d-flex">
				<div class="thumb">
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> alt="">
				</div>
				<div class="details">
					<a href="<?php echo $items->link; ?>">
						<h6><?php echo $items->title; ?></h6>
					</a>
					<ul class="meta">
						<li>
							<a href="#">
								<span class="lnr lnr-calendar-full"></span>
								<?php echo $time; ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
            <?php $i++;} } ?>
</div>