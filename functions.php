<?php
// this is to connect css, scripts, etc
function indica_files(){
    // Null for dependencies, true - load before the closing tag, microtime - gives new version every time
    wp_enqueue_script('main-indica-js', get_theme_file_uri('js/main.js'), NULL, microtime(), true); //use '0.0' instead of microtime() on live site
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('indica_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts','indica_files');

?>