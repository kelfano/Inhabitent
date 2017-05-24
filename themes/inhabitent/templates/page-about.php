<?php  /* Template Name: About US Page */
get_header();
?>


<div class="img" style="background-image:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,.5)),url(<?php echo get_the_post_thumbnail_url();?>);">
  <h1><?php echo get_the_title();?></h1>
</div>



<div class ="post">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php
get_footer();
?>