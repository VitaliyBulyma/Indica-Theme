<?php get_header(); ?>
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
<img style="width:300px" src="<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>" />
<?php

while (have_posts()){
    the_post();?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
    <hr />
<?php }

get_footer();
?>