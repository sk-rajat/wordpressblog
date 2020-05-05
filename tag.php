<?php get_header(); ?>
<div class="container-fluid blog-tags"><!---COVER ALL DIVS AND FOOTER----------->
<!--------------------------TAGS PAGE GRID LAYOUT STARTS HERE-------------->
<div class="container-fluid">
	<h5 class="text-monospace text-capitalize my-4">Tagged In <i class="fa fa-tags"></i> <span class="text-primary"><?php single_tag_title(); ?></span></h5>
	<div class="row">
		<?php
		while (have_posts()) {
		the_post(); ?>
		<div class="col-lg-4 pb-3 my-2 box custom-image-hover">
			<a href="<?php the_permalink(); ?>"><?php bigFeaturedImage();  ?></a>
			<?php get_template_part('template-parts/blog-content'); ?>
		</div>
	</div>
	<?php
	}
	?>
</div>
</div>
<!---------------------------TAGS PAGE GRID LAYOUT ENDS HERE----------------------->
<!-------------SINGLE BLOG PAGE RELATED BLOGS GRID LAYOUT STARTS HERE-------------->
<?php
$tags = get_tags();
if ($tags) { ?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-8 m-auto">
		<?php
		echo '<span class="d-block my-3 py-3 text-center lead text-gray text-monospace"><i class="fa fa-tags text-primary pr-2"></i>'.'Other Tags'. '</span>';
		foreach ( $tags as $tag ) {
		$tag_link = get_tag_link( $tag->term_id );
		?>
		<a href="<?php echo $tag_link; ?>" class="text-uppercase btn-small bg-primary custom-background rounded-pill d-inline-block text-white px-2 m-2 custom-font-size-medium"><i class="fa fa-tags text-white pr-2"></i> <?php echo $tag->name; ?></a>
		<?php
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