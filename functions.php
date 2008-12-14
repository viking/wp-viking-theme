<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

function viking_img( $name ) {
  echo get_bloginfo('template_directory') . "/images/$name.gif";
}

?>
