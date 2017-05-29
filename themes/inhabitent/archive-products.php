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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">' ,'</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

				<ul class ="product-type-list">
					<?php $product_types = get_terms(array(
							'taxonomy' =>'product-type',
							'hide_empty' =>0
					));
							if(!empty($product_types) && !is_wp_error($product_types)) : ?>
						

								<?php foreach($product_types as $product_type):?>
								

									<a href="<?php echo get_term_link($product_type);?>"
								<h3><?php echo $product_type ->name;?></h3>
								</a>

					<?php endforeach; ?>

					<?php endif; ?>
				
				</ul>

			</header><!-- .page-header -->
		
		<section class="product-grid-container">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="product-grid-item">
            <div class="thumbnail-wrapper">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <div class="product-info">
              <h2 class="entry-title"> <?php the_title(); ?></h2>
              <span class= "prices"> ......$<?php echo CFS()->get( 'price' ); ?></span>
            </div>
          </div>
      </setion>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<!--<?php else : ?>-->

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
  
<?php get_footer(); ?>