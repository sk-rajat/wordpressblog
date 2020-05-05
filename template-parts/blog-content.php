<h4 class="text-capitalize text-monospace"><a class="text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<h5 class="text-capitalize"><a class="text-gray text-monospace" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h5>
<div class="author-meta d-flex align-items-center">
	<?php
	echo get_avatar( get_the_author_meta('email'), '60');
	?>
	<div class="pl-2">
		<a href="<?php echo site_url('/about') ?>"><span class="d-block text-primary custom-font-size-medium font-weight-bold"><?php the_author(); ?></span></a>
		<span class="custom-font-size-medium text-gray text-uppercase font-weight-bold"><i class="fa fa-calendar text-primary d-inline pl-0"></i> <?php post_date(); ?></span>
		<span class="custom-font-size-small font-weight-bold">
			<?php
			$reading_time= get_field('reading_time');
			if ($reading_time) {
				echo "<i class='fa fa-hourglass-half text-right text-primary d-inline'></i> ";
				echo $reading_time;
				echo " mins read";
			}
			elseif (!$reading_time) {
				echo "";
			}
			?>
		</span>
	</div>
	<a class="float-right custom-font-size-medium blog-read-btn font-weight-bold border border-gray px-1 rounded-pill text-gray" href="<?php the_permalink(); ?>">See</a>
</div>