<!-------------------------FOOTER SECTION STARTS HERE-------------------->
<footer class="py-5 text-muted text-center text-small custom-background mt-5 box">
  <ul class="list-inline custom-background pb-3">
        <li class="list-inline-item ml-2"><a class="text-white" href="#"><i class="fa fa-facebook"></i></a></li>
        <li class="list-inline-item ml-2"><a class="text-white" href="#"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item ml-2"><a class="text-white" href="#"><i class="fa fa-github"></i></a></li>
        <li class="list-inline-item ml-2"><a class="text-white" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li class="list-inline-item"><a class="text-white" href="#"><i class="fa fa-instagram"></i></a></li>
        <li class="list-inline-item"><a class="text-white" href="#"><i class="fa fa-whatsapp"></i></a></li>
        <div id="fb-root"></div>
      </ul>
  <ul class="list-inline custom-background py-3">
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="">Policy</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="#">Terms</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo get_post_type_archive_link('services') ?>">Services</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo site_url('/contact') ?>">Contact</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo get_post_type_archive_link('tutorials') ?>">Learn</a></li>
    <li class="list-inline-item footer-menu"><a class="text-white mr-2" href="<?php echo site_url('/blog') ?>">Explore</a></li>
  </ul>
  <?php get_template_part('template-parts/current-year' ); ?>
  <div class="py-2">
    <a href="<?php echo site_url('/') ?>">
      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/logo-white.png" style="width: 5rem">
    </a>
  </div>
</footer>
</div>
<!-------------------------FOOTER SECTIION ENDS HERE-------------------->
</body>
</html>