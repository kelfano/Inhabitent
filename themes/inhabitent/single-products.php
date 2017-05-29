<?php
/**
 * The template for displaying all single product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="product-image-wrapper">
        <div class="product-image"><?php the_post_thumbnail( 'large' ); ?>
				</div>
			</div>

        <div class="product-content-wrapper">
          <h2 class="product-title"><?php the_title(); ?></h2>
          <p class="price">$<?php echo CFS()->get( 'price' ); ?></p>
          <?php the_content(); ?>

					<div class= "social-buttons">
						<button type ="button" class="black-btn">
							<i class ="fa fa-facebook"> Like </i>
						</button>

						<button type ="button" class="black-btn">
							<i class ="fa fa-twitter"> Tweet </i>
						</button>

						<button type ="button" class="black-btn">
							<i class ="fa fa-pinterest"> Pin </i>
						</button>

				</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
