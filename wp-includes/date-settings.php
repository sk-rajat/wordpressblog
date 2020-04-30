<?php
// GLOBAL DATE SETTINGS
function post_date() {
    $post_date = get_the_date( 'd, M, Y' );
    echo $post_date;
}
   