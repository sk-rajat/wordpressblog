<?php get_header(); ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>
<!-----------------------TUTORIALS PAGE SECTION STARTS HERE----------->
<div class="container-fluid" role="main">
	<div class="row">
		<div class="col-md-8">
			<?php
			$postNumber=1;
			while (have_posts()) {
			the_post(); ?>
			<div class="row tutorials-heading py-2 d-flex align-items-center box">
				<div class="col-1 text-monospace d-none d-lg-block d-xl-none d-none d-xl-block">
					<h5 class="custom-round-background p-2 bg-primary text-white"><?php echo $postNumber++; ?></h5>
				</div>
				<?php get_template_part('template-parts/tutorials-title'); ?>
			</div>
			<?php
			}
			?>
			
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