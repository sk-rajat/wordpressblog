<div class="col-md-4 text-center box">
	<div class="custom-positive-margin rounded-0 bg-secondary text-white">
		<div class="card-body border-top">
			<?php serviceSmallImage();  ?>
			<h6 class="card-title font-weight-bold text-primary text-capitalize text-monospace scroll scroll__service-section"><?php the_title(); ?></h6>
			<?php  echo '<p class="text-gray scroll scroll__service-section--para">' . get_the_excerpt() . '</p>' ?>;
			<a href="<?php the_permalink(); ?>" class="btn btn-lg custom-background btn-block py-3 text-white d-flex justify-content-around border-0 custom-btn-width custom-btn-margin font-weight-bold text-monospace">Read More<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
		</div>
	</div>
</div>