<?php  /* Template Name: Home Page */
get_header();
?>


  <div class="img" style="background-image:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,.5)),url(<?php echo get_the_post_thumbnail_url();?>);">
    <img src="<?php echo get_template_directory_uri()?>/project-04/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
  </div>

  <div class ="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>

  <section class ="product-info-container">
    <h1>shop stuff </h1>
    <div class ="product-type-block">
    <?php $product_types = get_terms(array(
        'taxonomy' =>'product-type',
        'hide_empty' =>0
    ));

      if(!empty($product_types) && !is_wp_error($product_types)) : ?>

      
        <?php foreach($product_types as $product_type):?>

          <div class = "product-type-block-wrapper">

            <?php
              $terms = apply_filters( 'taxonomy-images-get-terms', '', array( 
                'taxonomy' => 'product-type',
              ));
              $slug = $product_type->slug;
            ?>
            <?php
              foreach ($terms as $key => $value) {
                if($slug == $value->slug){
                $img = get_post_meta($value->image_id)["_wp_attached_file"][0];
                echo '<img src="' . home_url() . '/wp-content/uploads/' . $img . '">';
                }
              }
              ?>

            <p><?php echo $product_type -> description; ?></p>

            <p class ="btn">
            <a href="<?php echo get_term_link($product_type);?>"
            <h3><?php echo $product_type ->name;?> Stuff</h3>
            </a>
            </p>

          </div>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
  </section>



  <section class ="inhabitent-journal">
    <h1>inhabitent journal</h1>
    <div class ="wrapper">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );  ?>
      <?php $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      
        <ul class ="home-post">
          <li>
            <div class="thumbnail-wrapper">
              <img src="<?php echo the_post_thumbnail_url('large'); ?>">
            </div>
    
          <div class ="post-info-wrapper">
            <span class = "entry-meta">
              <h2><?php echo get_the_date() . ' / ' . strval(wp_count_comments(get_the_ID())->total_comments) . ' comments' ;?></h2> 
            </span>

          <span class = "entry-title">
            <h2> <?php echo get_the_title();?> </h2>
          </span>

          <a class="black-btn" href="<?php echo get_permalink();?>">Read Entry</a>
    
          </li>
        </ul>
      <?php
      endwhile;
      endif;
      // Reset Post Data
      wp_reset_postdata();
      ?>
    </div>
  </section>


  <section class ="adventures-container">
    <h2>Latest Adventures</h2>
      <ul class = "clearfix">

        <li class = "story-wrapper-left">

            <!--<img src="<?php echo get_template_directory_uri()?>/project-04/images/adventure-photos/canoe-girl.jpg" class="adventure-logo" alt="Canoe-Girl">-->
            <div class = "story-info">
              <h3 class = "entry-title">
                <a href = "#"> Getting Back to Nature in a Canoe </a> 
              </h3>
              <a class = "white-btn" href = "#"> Read More </a>
            </div>
        </li>

        <li class = "story-grid-wrapper"> 
          <div class = "story-wrapper-top">
            <!--<img src="<?php echo get_template_directory_uri()?>/project-04/images/adventure-photos/beach-bonfire.jpg" class="adventure-logo" alt="Beach-Bonfire">-->
            <div class = "story-info">
              <h3 class = "entry-title">
                <a href = "#"> A Night with Friends at the Beach </a> 
              </h3>
              <a class = "white-btn" href = "#"> Read More </a>
            </div>
          </div>

         <div class = "story-grid-wrapper-inner">
            <div class = "story-wrapper-bottom-left">
              <!--<img src="<?php echo get_template_directory_uri()?>/project-04/images/adventure-photos/mountain-hikers.jpg" class="adventure-logo" alt="Mountain-Hikers">-->
            <div class = "story-info">
              <h3 class = "entry-title">
                <a href = "#"> Taking in the View at Big Mountain </a>
              </h3>
              <a class = "white-btn" href = "#"> Read More </a>
            </div>
          </div>


            <div class = "story-wrapper-bottom-right">
              <!--<img src="<?php echo get_template_directory_uri()?>/project-04/images/adventure-photos/night-sky.jpg" class="adventure-logo" alt="Night-Sky">-->
              <div class = "story-info">
                <h3 class = "entry-title">
                  <a href = "#"> Star-Gazing at the Night Sky</a> 
                </h3>
                <a class = "white-btn" href = "#"> Read More </a>
              </div>
            </div>
        </div>
        
        </li>
      </ul>

<?php
get_footer();
?>