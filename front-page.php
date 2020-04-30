<?php get_header(); ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>
<!------------------------FRONT PAGE SECTION ONE STARTS HERE----------------->
<div class="container-fluid">
	<div class="row bg-secondary text-primary mt-4">
		<div class="col-md-8 text-center">
			<div class="front-page-image mx-auto box">
				<img class="img-fluid" alt="Responsive image" src="https://cdn.pixabay.com/photo/2016/06/20/03/15/pier-1467984_1280.jpg" />
			</div>
		</div>
		<div class="col-md-4 box d-flex align-items-center mt-4">
			<div class="my-auto">
				<h3 class="text-center text-md-left text-gray">Fully responsive, custom designed Wordpress CMS websites.</h3>
				<a href="<?php echo get_post_type_archive_link('services'); ?>" class="btn btn-lg custom-background btn-block my-4 py-3 text-white d-flex justify-content-around border-0 custom-btn-width custom-btn-margin font-weight-bold">Learn More<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
			</div>
		</div>
	</div>
</div>
<!------------------------FRONT PAGE SECTION ONE ENDS HERE----------------->
<!------------------------FRONT PAGE SECTION TWO STARTS HERE----------------->
<div class="container-fluid">
	<div class="row mt-4">
		<?php
			$servicesPostPage  = new WP_Query(array(
			'post_type' => 'services',
			'posts_per_page' => '3',
			));
			while ($servicesPostPage->have_posts()) {
		$servicesPostPage->the_post();
		// SERVICE SECTION
		get_template_part('template-parts/service-section');
		}
		?>
		<?php wp_reset_query();?>
	</div>
</div>
<!------------------------FRONT PAGE SECTION TWO ENDS HERE----------------->
<!------------------------FRONT PAGE SECTION THREE STARTS HERE----------------->
<div class="container-fluid">
	<div class="row box mt-4">
		<!-----------------FRONT PAGE SECTION THREE TUTORIALS COL-6 STARTS HERE----------->
		<div class="col-md-6 pb-4 box">
			<img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/20/03/15/pier-1467984_1280.jpg">
			<hr class="custom-hr">
			<?php
			$tutorialsPostPage  = new WP_Query(array(
			'post_type' => 'tutorials',
			'posts_per_page' => '3',
			));
			$postNumber=1;
			while ($tutorialsPostPage->have_posts()) {
			$tutorialsPostPage->the_post(); ?>
			<div class="row tutorials-heading d-flex align-items-center box scroll scroll__tutorials-list">
				<div class="col-1 d-none d-lg-block d-xl-none d-none d-xl-block">
					
					<h5 class="custom-round-background p-2 bg-primary text-white text-monospace"><?php echo $postNumber++; ?></h5>
				</div>
				<!------ TUTORIALS LIST ---->
				<?php get_template_part('template-parts/tutorials-title'); ?>
			</div>
			<?php
			}
			?>
			<?php wp_reset_query();?>
			<a href="<?php echo get_post_type_archive_link('tutorials'); ?>" class="btn btn-lg custom-background btn-block my-4 py-3 text-white d-flex justify-content-around border-0 font-weight-bold text-monospace">View All Tutorials<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
		</div>
		<!-----------------FRONT PAGE SECTION THREE TUTORIALS COL-6 ENDS HERE----------->
		<!-----------------FRONT PAGE SECTION THREE BLOG COL-6 STARTS HERE----------->
		<div class="col-md-6 pb-4 box">
			<img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/20/03/15/pier-1467984_1280.jpg">
			<hr class="custom-hr">
			<?php
			$posts  = new WP_Query(array(
			'posts_per_page' => '3',
			));
			while ($posts->have_posts()) {
			$posts->the_post();
			// BLOG LISTS
			get_template_part('template-parts/blog-title');
			}
			?>
			<?php wp_reset_query();?>
			
			<a href="<?php echo site_url('/blog'); ?>" class="btn btn-lg custom-background btn-block my-4 py-3 text-white d-flex justify-content-around border-0 font-weight-bold text-monospace">View Blog Page<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
		</div>
		<!-----------------FRONT PAGE SECTION THREE BLOG COL-6 ENDS HERE----------->
	</div>
</div>
<!------------------------FRONT PAGE SECTION THREE ENDS HERE----------------->
<?php get_footer(); ?>