<div class="row blog-heading d-flex align-items-center box scroll scroll__blog-list">
	<div class="col-1 d-none d-lg-block d-xl-none d-none d-xl-block">
		<h5 class="custom-round-background p-2 bg-primary text-white text-monospace custom-font-size-medium"><?php $post_date = get_the_date( 'd M' ); echo $post_date; ?></h5>
	</div>
	<div class="col-10">
		<h5 class="p-2 text-monospace text-capitalize"><a class="text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>
</div>