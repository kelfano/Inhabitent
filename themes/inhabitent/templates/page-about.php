<?php  /* Template Name: About US Page */
get_header();
?>


<div class="img custom-hero">
  <h1><?php echo get_the_title();?></h1>
</div>

<div class ="post">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

   <h2> Our story </h2>
  <p><?php echo CFS()->get( 'our_story' ); ?></p>

  <h2> Our team </h2>
  <p><?php echo CFS()->get( 'our_team' ); ?></p>
  
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php
get_footer();
?>