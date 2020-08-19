<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url('/') ?>"><strong>Indica</strong> Theme</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul class="min-list group">
            <li><a href="#">Live Menu</a></li>
            <li <?php if(is_page('about') or wp_get_post_parent_id(0)==15) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/education'); ?>">Education</a></li>
            <li><a href="#">Locations</a></li>            
            <li <?php if (get_post_type()== 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>            
          </ul>
        </nav>

      </div>
    </div>
  </header>
