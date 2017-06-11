<?php  get_header();?>

<div id="primary" class ="post-container">


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class = "entry-header">

        <img src="<?php echo get_the_post_thumbnail_url(); ?>"> 
        <h2 class = "entry-title"> 
        <a href="<?php the_permalink(); ?>"> <?php echo get_the_title();?> </a>
        </h2> 

        <p class ="entry-meta">
          <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </p>
        
    </header>

        <p class = "entry-content">
        <?php the_excerpt(); ?> 
        </p>
      
      </article>
    <?php endwhile; endif; ?>
    
</div>


<?php get_sidebar(); ?>
<?php get_footer();?>

<!--<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div> .entry-meta -->