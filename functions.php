<?php
// this is to connect css, scripts, etc
function indica_files(){
    wp_enqueue_style('indica_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','indica_files');

?>