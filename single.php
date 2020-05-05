<?php get_header(); ?>
<div class="container-fluid blog-single"><!---COVER ALL DIVS AND FOOTER----------->
<!--------------------------FULL SINGLE POST PAGE GRID LAYOUT STARTS HERE-------------->
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-lg-10 box m-auto py-3">
			<?php
			// GLOBAL DATE SETTINGS
			$post_date = get_the_date( 'M d, Y' );
				while (have_posts()) {
			the_post(); ?>
			<h2 class="text-capitalize text-monospace pt-3 text-primary text-center"><?php the_title(); ?></h2>
			<div class="post-meta d-flex justify-content-center py-4">
				<div class="post-meta__avatar-block d-flex align-items-center">
					<?php
					echo get_avatar( get_the_author_meta('email'), '60');
					?>
					<a href="<?php echo site_url('/about') ?>"><span class="d-block text-primary mx-2 font-weight-bold"><?php the_author(); ?></span></a>
				</div>
				
				<div class="py-3 pl-2 post-meta__date">
					<span class="text-white bg-primary custom-background p-1 text-uppercase">last updated on: <?php echo $post_date; ?></span>
					<!--------------------COUNT VIEWS ON EVERY SINGLE POST STARTS HERE-------->
				</div>
				<div class="py-3 pl-2 post-meta__views">
					<span class="text-primary p-1 text-uppercase font-weight-bold">
						<!---------TRACK FUNCTIONS.PHP FOR THE FOLLOWING CODE IN ORDER TO UPDATE IT--------->
						<?php gt_set_post_view(); ?>
						<?= gt_get_post_view(); ?>
					</span>
					<!--------------------COUNT VIEWS ON EVERY SINGLE POST ENDS HERE-------->
				</div>
			</div>
			<!-----------FEATURED IMAGE------->
			<?php bigFeaturedImage();  ?>
			<h6 class="py-3 text-monospace text-gray lead"><?php the_content(); ?></h6>
		
			<?php

				}
			?>
			<!--------------------PREVIOUS AND NEXT PAGE LINKS STARTS HERE------------------->
			<div class="tutorial-links d-flex pt-4 text-primary text-monospace text-uppercase">
				<div class="w-50 text-left">
					<u><?php next_post_link(' <i class="fa fa-angle-double-left"></i> %link'); ?></u>
				</div>
				<div class="w-50 text-right">
					<u><?php previous_post_link( '%link <i class="fa fa-angle-double-right"></i>'); ?></u>
				</div>
			</div>
			<!--------------------PREVIOUS AND NEXT PAGE LINKS ENDS HERE------------------->
		</div>
	</div>
</div>

<!--------------------------FULL SINGLE POST PAGE GRID LAYOUT ENDS HERE-------------->
<!-------------SINGLE BLOG PAGE RELATED BLOGS GRID LAYOUT STARTS HERE-------------->
<?php
$posttags = get_the_tags();
if ($posttags) { ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 m-auto text-center">
			<h6 class="display-6 text-gray text-monospace"><i class="fa fa-tags pr-2 text-primary"></i>Related Tags</h6>
			<?php
			foreach($posttags as $tag) {
			echo '<a class="text-uppercase btn-small bg-primary custom-background rounded-pill d-inline-block text-white px-2 m-2 custom-font-size-medium" href="'.get_tag_link($tag->term_id).'"><i class="fa fa-tags pr-2 text-white"></i>'.$tag->name.'</a>';
			}
			?>
		</div>
	</div>
</div>
<?php
}
?>
<!--------------SINGLE BLOG PAGE RELATED BLOGS GRID LAYOUT ENDS HERE------->
<?php get_footer(); ?>