<?php
// ------------AUTOMATICALLY POST DATE UPDATE---------------->
function reset_post_date_wpse_121565($data,$postarr) {
  // var_dump($data,$postarr); die; // debug
  $data['post_date'] = $data['post_modified'];
  $data['post_date_gmt'] = $data['post_modified_gmt'];
  return $data;
}
add_filter('wp_insert_post_data','reset_post_date_wpse_121565',99,2);
// ------------AUTOMATICALLY POST UPDATE ENDS HERE---------------->