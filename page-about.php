<?php get_header(); ?>
<!--------------- HEADER INFORMATION STARTS HERE ------------------------>
<?php get_template_part('template-parts/header-info'); ?>
<!--------------- HEADER INFORMATION ENDS HERE ------------------------>

<!--------------------------ABOUT PAGE BASIC INFORMATION STARTS HERE-------------->
<div class="container-fluid">
  <div class="row mb-5">
    <div class="col-lg-8 col-md-10 box m-auto pb-4">
      <?php
      while (have_posts()) {
      the_post(); ?>
      <?php the_post_thumbnail('bigFeaturedImage', array('class' => 'img-fluid mb-3 border border-primary rounded my-3' ));  ?>
      <p class="text-monospace text-gray lead"><?php the_content(); ?></p>
      <a href="<?php echo site_url('/contact') ?>" class="btn custom-background bg-primary text-white float-right d-flex justify-content-around border-0 custom-btn-width btn-lg">Contact Rajat<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
      <?php
      }
      ?>
    </div>
  </div>
</div>
<!----------ABOUT PAGE BASIC INFORMATION ENDS HERE---------------->

<?php get_footer(); ?>