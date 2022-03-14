<div class="relavent-story-post-wrap mt-30">
	<h4 class="title">Thể Thao</h4>
	<div class="relavent-story-list-wrap">
		<?php
			$i = 0;
			foreach ($xml_the_thao->xpath('//channel/item') as $items)
			{
			if (($i > 2)) {
				break;
			}
			if (strpos($items->description, "src=") && ($i < 6)) {
				$str = explode('src=', $items->description);
				$str1 = explode('></a></br>', $str[1]);
		?>
		<div class="single-relavent-post row align-items-center">
			<div class="col-lg-5 post-left">
				<div class="feature-img relative">
					<div class="overlay overlay-bg"></div>
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
				</div>
				<ul class="tags">
					<li><a href="#">Thể thao</a></li>
				</ul>
			</div>
			<div class="col-lg-7 post-right">
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
		</div>
        <?php
            $i++;
        	}
	        }
        ?>
	</div>
</div>