<?php  get_header();?>

<div id="primary" class ="post">
  <header class = "entry-header">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <img src="<?php echo get_the_post_thumbnail_url(); ?>"> 
      <h2 class = "entry-title"> <?php echo get_the_title();?> </h2> 

      <p class ="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
      </p>

  </header>

      <p class = "entry-content">
       <?php the_content(); ?> 
      </p>

    <?php endwhile; endif; ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer();?>

<!--<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div> .entry-meta -->