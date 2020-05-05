<?php get_header(); ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>
<!-----------------------TUTORIALS PAGE SECTION STARTS HERE----------->
<div class="container-fluid" role="main">
	<div class="row">
		<div class="col-md-8">
			<?php
			while (have_posts()) {
			the_post(); ?>
			<h3 class="custom-background bg-primary p-2 text-monospace text-capitalize text-white mb-3"><?php the_title(); ?></h3>
			<?php the_post_thumbnail('bigFeaturedImage', array('class' => 'custom-res-image img-fluid mb-3' ));  ?>
			<p class=""><?php the_content(); ?></p>
			<?php
			}
			?>
			<!--------------------PREVIOUS AND NEXT PAGE LINKS STARTS HERE------------------->
			<div class="tutorial-links d-flex text-primary pt-4">
				<div class="w-50 text-left">
					<?php previous_post_link( '<i class="fa fa-angle-double-left"></i> %link'); ?>
				</div>
				<div class="w-50 text-right">
					<?php next_post_link('%link <i class="fa fa-angle-double-right"></i>'); ?>
				</div>
			</div>
			<!--------------------PREVIOUS AND NEXT PAGE LINKS ENDS HERE------------------->
		</div>
		<!--------------- TUTORIALS COL-4 STARTS HERE ------------------------>
		<div class="col-md-4 p-0">
			<?php
			get_template_part('template-parts/tutorials-info');
			get_template_part('template-parts/tutorials-category');
			?>
		</div>
		<!--------------- TUTORIALS COL-4 ENDS HERE ------------------------>
	</div>
</div>
<!-----------------------TUTORIALS PAGE SECTION ENDS HERE----------->
<?php get_footer(); ?>