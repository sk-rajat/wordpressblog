<?php get_header() ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>


<?php get_template_part('inc/form', 'enquiry'); ?>

<?php
while (have_posts()) {
	the_post();
	the_content();
}
?>
			<?php get_footer(); ?>