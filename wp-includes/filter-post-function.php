<?php
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){
    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order' => $_POST['date'] // ASC or DESC
    );
 
    // for taxonomies / categories
    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );
 
    // if post thumbnail is set
    if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
        $args['meta_query'][] = array(
            'key' => '_thumbnail_id',
            'compare' => 'EXISTS'
        );
    // if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
    $query = new WP_Query( $args );
 
    if( $query->have_posts() ) :
        echo '<div class="row">';
        echo '<div class="col-md-8 m-auto py-5">';
        echo '<h5 class="text-monospace font-weight-bold py-2 text-center text-gray">Listed by Titles only</h5>';
        while( $query->have_posts() ): $query->the_post();
            get_template_part('template-parts/blog-title');
        endwhile;
        echo '</div>';
        echo '</div>';
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;
 
    die();
}