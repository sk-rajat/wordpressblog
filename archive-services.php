<?php get_header(); ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>

<!------------------------SERVICES PAGE SECTION STARTS HERE----------------->
<div class="container-fluid">
	<div class="row">
		<?php
			while (have_posts()) {
		the_post(); 
		get_template_part('template-parts/service-section');
			}
		?>
	</div>
</div>

<!------------------------SERVICES PAGE SECTION ENDS HERE----------------->
<!------------------SERVICES SECTION TWO(CONTACT STARTS HERE---------->
<div class="container-fluid">
	<div class="row py-5">
		<div class="col-lg-10 m-auto d-flex align-items-center py-5 border border-primary border-sm-none rounded box-shadow-dark">
			<span class="lead text-capitalize text-monospace text-gray">decided to take any of the following <a class="text-primary font-weight-bold" href="<?php get_post_type_archive_link('services') ?>">services</a>? don't hesitate to contact, you can trust me because I love what i do, and take responsibility sincerly.</span>
			<a href="<?php echo site_url('/contact'); ?>" class="ml-3 bg-primary custom-background btn btn-small rounded-pill text-white font-weight-bold">Contact</a>
		</div>
	</div>
</div>
<!------------------SERVICES SECTION TWO(CONTACT ENDS HERE---------->
<?php get_footer(); ?>