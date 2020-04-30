<?php
// FALLBACK IMAGES
function BigFeaturedImage() {
    if (has_post_thumbnail()) {
        the_post_thumbnail('blogFeaturedImage', array('class' => 'custom-res-image img-fluid mb-3 border-top border-primary' ));
    }
    else { 
        $first_img = get_stylesheet_directory_uri(). "/images/no-image.png";
        print '<img class="img-fluid border-top border-primary mb-3" src="'. $first_img .'" alt="'. get_the_title() .'" />';
    
    }
}

function serviceSmallImage() {
    if (has_post_thumbnail()) {
        the_post_thumbnail('serviceFeaturedSmallImage', array('class' => 'custom-service-small-image custom-negative-margin mb-3 rounded-circle p-1 border bg-secondary' ));
    }
    else { 
        $first_img = get_stylesheet_directory_uri(). "/images/no-image.png";
        print '<img class="custom-service-small-image custom-negative-margin mb-3 rounded-circle p-1 border bg-secondary" src="'. $first_img .'" alt="'. get_the_title() .'" />';
    
    }
}

// FALLBACK IMAGES ENDS
?>