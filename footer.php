<!-------------------------FOOTER SECTION STARTS HERE-------------------->
<footer class="py-5 text-muted text-center text-small custom-background mt-5 box">
  <ul class="list-unstyled pb-3">

        <li class="list-inline-item ml-2"><?php wp_nav_menu( array( 'theme_location' => 'social_links' ) ); ?></li>
        <div id="fb-root"></div>
      </ul>
  <ul class="list-inline py-3 footer-links">
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo get_post_type_archive_link('services') ?>">Services</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo site_url('/contact') ?>">Contact</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo get_post_type_archive_link('tutorials') ?>">Learn</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo site_url('/blog') ?>">Explore</a></li>
  </ul>
  <?php get_template_part('template-parts/current-year' ); ?>
  <div class="py-2">
    <a href="<?php echo site_url('/') ?>">
      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/logo-white.png" style="width: 7rem">
    </a>
  </div>
</footer>
</div>
<!-------------------------FOOTER SECTIION ENDS HERE-------------------->
</body>
</html>