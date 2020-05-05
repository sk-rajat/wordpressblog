<?php
/*
 * functions.php
 * 
 */
// FEATURED-IMAGES
require_once( __DIR__ . '/wp-includes/featured-images.php');



function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style('varela', 'https://fonts.googleapis.com/css?family=Varela+Round&display=swap&subset=hebrew,latin-ext');
    wp_enqueue_style('vidaloka', 'https://fonts.googleapis.com/css?family=Vidaloka&display=swap');
    wp_enqueue_style('vidaloka', 'https://fonts.googleapis.com/css2?family=Anton&display=swap');
 	

    // Register the script like this for a theme:
    wp_enqueue_script( 'bootstra-jquery', get_stylesheet_directory_uri() . '/assets/jquery/jquery.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-jquery-min', get_stylesheet_directory_uri() . '/assets/jquery/jquery.min.js' );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.js' );
    wp_enqueue_script( 'bootstrap-material', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
    // CUSTOM JAVASCRIPT
    wp_enqueue_script( 'filter-post.js', get_stylesheet_directory_uri() . '/assets/custom-js/filter-post.js' );
    wp_enqueue_script( 'navbar-shrunk.js', get_stylesheet_directory_uri() . '/assets/custom-js/navbar-shrunk.js' );
	
    
 
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




// HANDLING EXCERPTS
require_once( __DIR__ . '/wp-includes/handling-excerpts.php');




// ************** FEATURED IMAGE SUPPORT ********************
add_theme_support( 'post-thumbnails' );
// ------------- FEATURED IMAGE SUPPORT FINISH ---------------


// ************** ADD CUSTOM IMAGE SIZES *******************
add_image_size( 'blogFeaturedImage', 410, 250, true );
add_image_size( 'bigFeaturedImage', 792, 478, true );
add_image_size( 'serviceFeaturedSmallImage', 100, 100, true );
add_image_size( 'blogCategoriesSmallImage', 100, 100, true );
add_image_size( 'frontPageFeaturedImage', 400, 240, true );

// --------------- ADD CUSTOM IMAGE SIZES FINISH ---------------------

// ADD CLASSES TO TAGS
require_once( __DIR__ . '/wp-includes/custom-tag-class.php');

// MOST VIEW POST
require_once( __DIR__ . '/wp-includes/most-view-post.php');

// AUTOMATIC POST DATE UPDATE
require_once( __DIR__ . '/wp-includes/post-date-update.php');




//  CUSTOM POST TYPES STARTS HERE //
/*Tutorials Custom Post type start*/
function cw_post_type_news() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labelTutorials = array(
'name' => _x('tutorials', 'plural'),
'singular_name' => _x('tutorials', 'singular'),
'menu_name' => _x('tutorials', 'admin menu'),
'name_admin_bar' => _x('tutorials', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New tutorials'),
'new_item' => __('New tutorials'),
'edit_item' => __('Edit tutorials'),
'view_item' => __('View tutorials'),
'all_items' => __('All tutorials'),
'search_items' => __('Search tutorials'),
'not_found' => __('No tutorials found.'),
);
$argsTutorials = array(
'supports' => $supports,
'labels' => $labelTutorials,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'tutorials'),
'has_archive' => true,
'hierarchical' => false,
'capability_type' => 'tutorial',
'map_meta_cap' => true,
);

/* Services Cus´tom Post Type Starts---*/
$labelServices = array(
'name' => _x('services', 'plural'),
'singular_name' => _x('services', 'singular'),
'menu_name' => _x('services', 'admin menu'),
'name_admin_bar' => _x('services', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New services'),
'new_item' => __('New services'),
'edit_item' => __('Edit services'),
'view_item' => __('View services'),
'all_items' => __('All services'),
'search_items' => __('Search services'),
'not_found' => __('No services found.'),
);
$argsServices = array(
'supports' => $supports,
'labels' => $labelServices,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'services'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('tutorials', $argsTutorials);
register_post_type('services', $argsServices);
}
/*Tutorials Custom Post type end*/
add_action('init', 'cw_post_type_news');


// CUSTOM POST TYPES ENDS HERE  //


// CUSTOM TAXANOMIES STARTS HERE 
 
function wporg_register_taxonomy_topic()
{
    $labels = [
        'name'              => _x('topics', 'taxonomy general name'),
'singular_name'     => _x('topic', 'taxonomy singular name'),
'search_items'      => __('Search topics'),
'all_items'         => __('All topics'),
'parent_item'       => __('Parent topic'),
'parent_item_colon' => __('Parent topic:'),
'edit_item'         => __('Edit topic'),
'update_item'       => __('Update topic'),
'add_new_item'      => __('Add New topic'),
'new_item_name'     => __('New topic Name'),
'menu_name'         => __('topic'),
];
$args = [
'hierarchical'      => true, // make it hierarchical (like categories)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true,
'rewrite'           => ['slug' => 'topic'],
];
register_taxonomy('topic', ['tutorials'], $args);
}
add_action('init', 'wporg_register_taxonomy_topic');




// DISPLAYING IN ASC ORDER(TUTORIALS ARCHIVE PAGE)
function tutorials_pre_get_posts( $query ) {
    if ( !is_admin() AND is_post_type_archive('tutorials') AND $query->is_main_query() )
        {
        $query->set( 'orderby', 'meta_value_num' );
        $query->set( 'order', 'ASC' );
    }
}
add_filter( 'pre_get_posts', 'tutorials_pre_get_posts' );


// **************    CUSTOM POST QUERIES FOR CONTROL THE STRUCTURE *********************
/*
function wporg_add_custom_post_types($query) {
    if ( is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'page', 'services' ) );
    }
    return $query;
}
add_action('pre_get_posts', 'wporg_add_custom_post_types');
*/
// -------------   CUSTOM POST QUERIES FOR CONTROL THE STRUCTURE FINISH --------------


// CUSTOM TAXANOMIES ENDS HERE
// FOR FUTURE USE
function wpb_custom_new_menu() {
      register_nav_menu('header_menu',__( 'Header Menu' ));
      register_nav_menu('footer_menu',__( 'Footer Menu' ));
      register_nav_menu('social_links',__( 'Social Links' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
// CUSTOM NAV MENU FINISH ---------------

/*   FOR FUTURE USE
// BLOCK ACCESS TO /wp-admin FOR NON ADMINS & REDIRECT TO HOME URL CODE STARTS HERE.
function custom_blockusers_init() {
  if ( is_user_logged_in() && is_admin() && !current_user_can( 'administrator' ) ) {
    wp_redirect( home_url() );
    exit;
  }
}
add_action( 'init', 'custom_blockusers_init' ); // Hook into 'init'
// BLOCK ACCESS TO /wp-admin FOR NON ADMINS & REDIRECT TO HOME URL CODE ENDS HERE.


//   GET CUSTOM LOGIN FORM 
 get_template_part('login-page/login', 'page');

*/

/* FOR FUTURE USE
// CREATING SIDEBARS

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. 
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. 
}

*/


/* FOR FUTURE USE 
//  CUSTOMIZING LOGIN PAGE CODE STARTS HERE
// changing logo of login page  ----->
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-green.png);
        height:142px;
        width:200px;
        background-size: 200px 153px;
        background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
// change logo url(redirect to home)
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );
// convey login message on the top of login bar
function my_login_message() {
    return '<p class="text-center lead">USER LOGIN<br/>
    </p>';
}
add_filter('login_message', 'my_login_message');
// convey login error message
function login_error_message($error) {
    global $errors;
    //wordpress generates different errors such as empty_username, invalid_email, empty email, username_exists, incorrect_username
    $error_codes =  $errors->get_error_codes();
    $error_msg = '';

    if (in_array("empty_username", $error_codes)) {
        $error_msg = 'username value is empty, Please provide your name';
    }
    if (in_array("empty_email", $error_codes)) {
        $error_msg = 'email value is empty, Please provide your email';
    }
    if (in_array("invalid_email", $error_codes)) {
        $error_msg = 'Please provide a genuine email';
    }
    if (in_array("username_exists", $error_codes)) {
        $error_msg = 'This name has been already registered in our database, Please provide other name';
    }
    if (in_array("invalid_username", $error_codes)) {
        $error_msg = 'This name is not registered in our database, please try again ';
    }
    if (in_array("incorrect_password", $error_codes)) {
        $error_msg = 'You have typed wrong password, please try again ';
    }
    return $error_msg;
}
add_filter('login_errors', 'login_error_message');
// custom footer link example
function my_custom_footer_link() {
    echo "<a href='#' class='text-center text-gray d-block border-0 my-4'><u>Go to the website</u></a>";
}
add_action('login_footer', 'my_custom_footer_link');
//  CUSTOMIZING LOGIN PAGE CODE ENDS HERE


function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
*/


// FILTER BLOG POST FUNCTION
require_once( __DIR__ . '/wp-includes/filter-post-function.php');

// ADDING CUSTOM BODY CLASSES
require_once( __DIR__ . '/wp-includes/custom-body-class.php');

// GLOBAL DATE SETTINGS
require_once( __DIR__ . '/wp-includes/date-settings.php');
    
// CUSTOM LOGO IN CUSTOMIZE PANEL IN WORDPRESS WEBSITE, IF HAVE ANY OR ELSE DISPLAY CUSTOM CODE 
require_once( __DIR__ . '/wp-includes/custom-logo.php');



function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}