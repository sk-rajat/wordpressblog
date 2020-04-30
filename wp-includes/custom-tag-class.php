<?php
// -------------CUSTOM CLASS TO THE RELATED TAGS IN SINGLE.PHP FILE *******
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="text-capitalize btn-small bg-primary custom-background rounded-pill d-inline-block text-white px-2 py-1 m-2"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags');
// ------------------CUSTOM CLASSES TO THE TAGS IN SINGLE.PHP FILE FINISH-----------------