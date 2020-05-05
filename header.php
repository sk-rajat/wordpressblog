<!DOCTYPE html>
<html class="m-0">
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap&subset=hebrew,latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body <?php body_class(); ?> >
		<header class="shadow-sm">
			<!--------------NAVBAR STARTS HERE------------------->
			<nav class="justify-content-between navbar navbar-expand-lg navbar-dark static-top p-0 align-items-center">
				<div class="container">
					<?php
					if( function_exists( 'the_custom_logo' ) ) {
					if(has_custom_logo()) {
					the_custom_logo();
					} else { ?>
					<a class="navbar-brand branding" href="<?php echo site_url('/') ?>">
						<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/logo-green.png" style="width: 4rem">
					</a>
					<?php
					}
					}
					?>
					
					<button class="navbar-toggler border-0 shadow-none hello" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li <?php if (is_front_page()) echo 'class="active font-weight-bold"'; ?> class="nav-item px-2">
								<a class="nav-link" href="<?php echo site_url('/') ?>">Home<span class="sr-only">(current)</span>
							</a>
						</li>
						<li <?php if (is_post_type_archive('services') OR is_singular('services')) echo 'class="active font-weight-bold"'; ?> class="nav-item px-2">
							<a class="nav-link" href="<?php echo get_post_type_archive_link('services') ?>">Services</a>
						</li>
						<li <?php if (is_post_type_archive('tutorials') OR is_singular('tutorials') OR is_tax()) echo 'class="active font-weight-bold"'; ?> class="nav-item px-2">
							<a class="nav-link" href="<?php echo get_post_type_archive_link('tutorials') ?>">Tutorials</a>
						</li>
						<li <?php if (is_home() OR is_singular('post') OR has_tag()) echo 'class="active font-weight-bold"'; ?> class="nav-item px-2">
							<a class="nav-link" href="echo site_url('/blog')">Blog</a>
						</li>
						<li <?php if (is_page('about')) echo 'class="active font-weight-bold"'; ?>  class="nav-item px-2">
							<a class="nav-link" href="<?php echo site_url('/about') ?>">About</a>
						</li>
						<li <?php if (is_page('contact')) echo 'class="active font-weight-bold"'; ?> class="nav-item px-2">
							<a class="nav-link" href="<?php echo site_url('/contact') ?>">Contact</a>
						</li>
					</ul>
					<!------------------USER LOGIN CONDITION CODE STARTS HERE--------------------
					<?php
					if (is_user_logged_in()) { ?>
					
					<a class="nav-link px-2 text-center btn-sm btn-outline-primary border border-primary logout" href="<?php echo wp_logout_url(); ?>">
						<span class="">Log Out</span>
						<span><?php echo get_avatar(get_current_user_id(), 40); ?></span>
					</a>
					
					<?php
					} else { ?>
					
					<a class="nav-link px-2 text-center btn-sm bg-primary text-white login" href="<?php echo esc_url(site_url('/wp-login.php')); ?>">Login
					</a>
					
					<?php
					}
					?>
					----------------USER LOGIN CONDITION CODE ENDS HERE-------------------->
				</div>
			</div>
		</nav>
	</header>
	<!-------
	<MOVE ME LATER HEADER SHRUNK">
	---------------------NAVBAR ENDS HERE--------------->
	<script type="text/javascript">
		/* === Shrink Header on Scroll === */
	var header = $('header');
	var shrinkIt = header.height();
	$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if ( scroll >= shrinkIt ) {
	header.addClass('shrunk');
	}
	else {
	header.removeClass('shrunk');
	}
	});
	</script>