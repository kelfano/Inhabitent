<?php  /* Template Name: Home Page */
get_header();
?>

<div class="img" style="background-image:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,.5)),url(<?php echo get_the_post_thumbnail_url();?>);">
  <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
</div>
<div class ="post">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>

<section class ="shop-stuff">
  <h1>shop stuff</h1>
  <div class ="wrapper">
    <div>
    <img src="http://tent.academy.red/wp-content/themes/inhabitent/images/do.svg" alt="Do">
    <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
    <a href="<?php echo site_url('');?>">do stuff</a>
    </div>
  </div>
</section>

<section class ="inhabitent-journal">
  <h1>inhabitent journal</h1>
  <div class ="wrapper">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
     echo get_the_title();
     ?>
     <div class="img" style="background-image:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,.5)),url(<?php echo get_the_post_thumbnail_url();?>);">
    </div>
    <h2><?php echo get_the_date() . ' / ' . strval(wp_count_comments(get_the_ID())->total_comments) . ' comments' ;?></h2>
    <a href="<?php echo get_permalink();?>">read entry</a>
    <?php
    endwhile;
    endif;
    // Reset Post Data
    wp_reset_postdata();
    ?>
  </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.5607425932185!2d-123.10440868459068!3d49.26577107932948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486715ff117858d%3A0x7632f352bd50ba84!2sChurch+of+God+In+Vancouver!5e0!3m2!1sen!2sca!4v1495437867390" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php
get_footer();
?>