<div class="single-sidebar-widget editors-pick-widget">
	<h6 class="title">Giải trí</h6>
	<div class="editors-pick-post">
		<div class="feature-img-wrap relative">
			<?php
			$i = 0;
			foreach ($xml_giai_tri->xpath('//channel/item') as $items)
			{
			if (($i == 1)) {
			  break;
			}
			if (strpos($items->description, "src=")) {
			  $str = explode('src=', $items->description);
			  $str1 = explode('></a></br>', $str[1]);
			?>
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src=<?php echo $str1[0].'"' ?> >
			</div>
			<ul class="tags">
				<li><a href="#">Giải trí</a></li>
			</ul>
		</div>

		<div class="details">
			<a href="<?php echo $items->link; ?>">
				<h4 class="mt-20"><?php echo $items->title; ?></h4>
			</a>
			<ul class="meta">
				<li>
					<a href="#"><span class="lnr lnr-calendar-full"></span>
			          <?php echo $items->pubDate; ?>
			        </a>
			    </li>
			</ul>
			<p class="excert">
				<?php echo $str1[1]; ?>
			</p>
      		<?php $i=1;} } ?>
		</div>

		<div class="post-lists">
      <?php
        $i = 0;
        foreach ($xml_giai_tri->xpath('//channel/item') as $items)
        {
          if (($i > 3)) {
            break;
          }
          if (strpos($items->description, "src=")) {
            if ($i == 0) {
              $i++;
              continue;
            }
            $str = explode('src=', $items->description);
            $str1 = explode('></a></br>', $str[1]);
            $src = $str1[0];
            $time = substr($items->pubDate, 0, 11);
      ?>
			<div class="single-post d-flex flex-row">
				<div class="thumb">
					<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
				</div>
				<div class="detail">
					<a href="<?php echo $items->link; ?>">
            <h6><?php echo $items->title; ?></h6>
          </a>
					<ul class="meta">
						<li><a href="#"><span class="lnr lnr-calendar-full"></span>
              <?php echo $time; ?>
            </a></li>
					</ul>
				</div>
			</div>
      <?php $i++; } } ?>
		</div>
	</div>
</div>