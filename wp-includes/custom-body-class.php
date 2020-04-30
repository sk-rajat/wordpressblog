<?php
// CUSTOM BODY CLASSES
add_filter( 'body_class', 'my_background_body_class');
function my_background_body_class( $classes ) {
     if ( is_page() || is_home() || is_archive() || is_single()  )
          $classes[] = 'bg-secondary';
 
     return $classes; 
}