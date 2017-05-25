<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<!--Rest of page markup and php here-->

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class ="product-type">
		 <a href="<?php echo get_permalink();?>">DO</a>
		 <a href="<?php echo get_permalink();?>">EAT</a>
		 <a href="<?php echo get_permalink();?>">SLEEP</a> 
		 <a href="<?php echo get_permalink();?>">WEAR</a> 
		</div>
  
				 
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">' ,'</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>

						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo CFS()->get( 'price' ); ?>
					</div> 
				</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
  
<?php get_footer(); ?>