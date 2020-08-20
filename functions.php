<?php

require get_theme_file_path('/inc/search-route.php');
// this add new field into the rest api json response
function indica_custom_rest (){
    register_rest_field('post','authorName',array(
        'get_callback'=> function(){return get_the_author();}
    ));
};

add_action('rest_api_init', 'indica_custom_rest');

// this is to connect css, scripts, etc
function indica_files(){
    // Null for dependencies, true - load before the closing tag, microtime - gives new version every time
    
    wp_enqueue_script('search-indica-js', get_theme_file_uri('js/Search.js'), array('jquery'), microtime(), true); //use '0.0' instead of microtime() on live site
    wp_enqueue_script('bundle-indica-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true); //use '0.0' instead of microtime() on live site
    // wp_enqueue_script('jquery-indica-js', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', NULL, microtime(), true); //use '0.0' instead of microtime() on live site
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('indica_main_styles', get_stylesheet_uri(), NULL, microtime());
    // sends code to front end to use 
    wp_localize_script('search-indica-js', 'indicaData', array(
        'root_url'=>get_site_url()
        
    ));
}

add_action('wp_enqueue_scripts','indica_files');

// add title
function indica_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','indica_features');

// 
function indica_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('education') AND $query->is_main_query()){
        $today = date('Y/m/d');
        $query->set('meta_key','event_date');
        $query->set('orderby','meta_value_num');
        $query->set('order','ASC');
        $query->set('meta_query', array(
            array(
              'key'=> 'event_date',
              'compare'=>'>=',
              'value' => $today,
              'type'=> 'date' 
            )
          ));
    }
    
};
add_action('pre_get_posts','indica_adjust_queries');



?>