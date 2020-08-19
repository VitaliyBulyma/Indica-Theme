<?php get_header(); ?>

  <div class="frontpage-banner">
  <!-- <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div> -->
  <div class="page-banner__bg-image" style="background-image: radial-gradient(at center center,rgba(247,225,50,.84) 0%,#F7A418 100%)"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large"><img style="width:30vh" src="<?php echo get_theme_file_uri('/images/weed.png') ?>" /></h1>
      <p style=" font-size: 10vh; letter-spacing: 8px; color: black; font-weight:bold; margin-bottom: -12px; line-height:1">Indica</p><br />
      <h2 style="margin:0; font-size: 9vh; letter-spacing: 9px; font-weight:lighter; color: black; line-height:1">Theme</h2>
<!-- <img style="width: 30%; margin-top: 5vh" src="https://hellocannabis.ca/wp-content/uploads/2020/03/preloader-logo.svg" /><br /> -->
      <a style="margin-top: 10vh; text-decoration: none" href="#" class="fl-button">Visit us ></a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        
        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Mar</span>
            <span class="event-summary__day">25</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
          </div>
        </div>

        
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

<!-- Custom Query -->
<?php
$homepagePosts= new WP_Query(array(
  'posts_per_page'=> 2,

));

while($homepagePosts->have_posts()){
  $homepagePosts->the_post();?>
          <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>  
              </a>
          <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
<?php } wp_reset_postdata();
?>


        
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--blue">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/indica.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Indica</h2>
        <p class="t-center">Cannabis indica is native to Afghanistan, India, Pakistan, and Turkey. The plants have adapted to the often harsh, dry, and turbulent climate of the Hindu Kush mountains.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/sativa.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Sativa</h2>
        <p class="t-center">Cannabis sativa is found primarily in hot, dry climates with long sunny days. These include Africa, Central America, Southeast Asia, and western portions of Asia.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hybrid.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Hybrid</h2>
        <p class="t-center">Hybrids are typically grown on farms or greenhouses from a combination of sativa and indica strains.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

  <?php get_footer();

?>