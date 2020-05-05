<?php
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 64,
 'width'       => 64,
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );