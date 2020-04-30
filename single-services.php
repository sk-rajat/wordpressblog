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
			<h3 class="custom-background bg-primary p-2 text-monospace text-white mb-3"><?php the_title(); ?></h3>
			<?php bigFeaturedImage();  ?>
			<p class=""><?php the_content(); ?>
				<br><br>
				
			</p>
			<?php
				}
			?>
		</div>
		<div class="col-md-4 p-0">
			<!----------------TUTORIALS COL-MD-4 FIRST SECTION STARTS HERE------>
			<div class="wrapper tutorials-sidebar-first-section box mx-auto text-center p-2 pb-3 mb-3">
				<h4 class="text-monospace pb-3">Services</h4>
				<img class="img-fluid medium-round-icons" src="<?php bloginfo('template_url'); ?>/images/notes.png">
			</div>
			
			<!----------------TUTORIALS COL-MD-4 FIRST SECTION ENDS HERE------>
			<!----------------TUTORIALS COL-MD-4 SECOND SECTION(OTHER SERVICES) STARTS HERE----->
			<div class="wrapper-sidebar service-list box p-2">
				<h4 class="text-center pb-3 text-monospace">Other Services</h4>
				<ul class="list-unstyled list-format">
					<?php
					$servicesPostPage  = new WP_Query(array(
					'post_type' => 'services',
					'posts_per_page' => '-1',
					));
					while ($servicesPostPage->have_posts()) {
					$servicesPostPage->the_post(); ?>
					<li class="margin-bottom justify-content-around list-group-item">
						<div class="row d-flex align-items-center">
							<div class="container-icon col-4">
								<?php the_post_thumbnail('serviceFeaturedSmallImage', array('class' => 'small-round-icons rounded-circle' ));  ?>
							</div>
							<div class="container-title col-8">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</div>
						</div>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
			<!------------------TUTORIALS COL-MD-4 SECOND SECTION (OTHER SERVICES)STARTS HERE----------->
		</div>
	</div>
</div>
<!-----------------------TUTORIALS PAGE SECTION ENDS HERE----------->
<?php get_footer(); ?>