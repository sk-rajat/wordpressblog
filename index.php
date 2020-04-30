<?php get_header(); ?>
<div class="container-fluid blog-section"><!---COVER ALL DIVS AND FOOTER----------->
<?php get_template_part('template-parts/filter-post'); ?>
<!--------------------------BLOG PAGE GRID LAYOUT STARTS HERE-------------->
<div class="container-fluid py-4 box">
	<div class="row">
		<?php
		while (have_posts()) {
		the_post(); ?>
		<div class="col-lg-4 pb-3 my-2 box custom-image-hover">
			<a href="<?php the_permalink(); ?>"><?php bigFeaturedImage();  ?></a>
			<?php get_template_part('template-parts/blog-content'); ?>
		</div>
		<?php
			}
		?>
		
	</div>
	<div class="pagination-area text-primary text-monospace font-weight-bold">
		<?php echo paginate_links(); ?>
	</div>
</div>
<!--------ONLY SINGLE LATEST BLOG STARTS HERE----------->
<div class="container-fluid">
	<span class="py-3 d-block lead">Most Popular</span>
	<div class="row d-flex align-items-center mb-4 box">
		<?php
		query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=1');
		if (have_posts()) : while (have_posts()) : the_post();
		?>
		<div class="col-lg-8">
			
			<a href="<?php the_permalink(); ?>"><?php bigFeaturedImage(); ?></a>
		</div>
		<div class="col-lg-4 mb-4 my-auto align-items-center">
			<?php get_template_part('template-parts/blog-content'); ?>
		</div>
		<?php
			endwhile; endif;
			wp_reset_query();
			?>
	</div>
</div>
<!--------ONLY SINGLE LATEST BLOG ENDS HERE---->
<!--------------------------BLOG PAGE GRID LAYOUT ENDS HERE-------------->
<!-------------SINGLE BLOG PAGE RELATED BLOGS GRID LAYOUT STARTS HERE-------------->
<?php
$tags = get_tags();
if ($tags) { ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 m-auto">
			<?php
			echo '<span class="d-block my-3 py-3 text-center lead text-gray text-monospace"><i class="fa fa-tags text-primary pr-2"></i>'.'Tags'. '</span>';
			foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id ); ?>
			<a href="<?php echo $tag_link; ?>" class="text-uppercase btn-small bg-primary custom-background rounded-pill d-inline-block text-white px-2 py-1 m-2 custom-font-size-medium"><i class="fa fa-tags text-white pr-2"></i><?php echo $tag->name; ?></a>
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