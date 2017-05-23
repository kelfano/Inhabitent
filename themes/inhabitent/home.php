<?php  get_header();?>

<div class ="post">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer();?>