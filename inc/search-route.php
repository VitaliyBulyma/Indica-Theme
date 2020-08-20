<?php

add_action('rest_api_init', 'indicaRegisterSearch');

function indicaRegisterSearch() {
  register_rest_route('indica/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE, 
    'callback' => 'indicaSearchResults'
  ));
}

function indicaSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post','page','education'),
    // to make it more secure
    's' => sanitize_text_field($data['term'])
  ));

  $results = array(
    'generalInfo'=> array(),
    'education'=>array(),
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();
    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }
    if (get_post_type() == 'education') {
      array_push($results['education'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }
  }

  return $results;

}