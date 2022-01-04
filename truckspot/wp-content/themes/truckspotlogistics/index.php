<?php 

// Blog

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-container">
   <div class="container">
      <h1 class="title-page">
         <?php if ( is_category() ) { single_cat_title();
         } else{
            echo SCF::get('blog_title', 50);
         } ?>
      </h1>
      <div class="main-wrapper">
         <div class="main-content blog-content">
            <div class="blog-wrapper">
               <?php if( have_posts() ) :
                  while( have_posts() ) : the_post(); ?>

                     <a href="<?php the_permalink(); ?>" class="article">
                        <div class="article-top">
                           <?php if (SCF::get('another_image')) { ?>
                              <div class="article-img" style="background-image: url(<?php echo wp_get_attachment_image_url(SCF::get('another_image'), 'large'); ?>);"></div>
                           <?php } else{ ?>
                              <div class="article-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                           <?php } ?>
                        </div>
                        <div class="article-content">
                           <div class="article-info">
                              <div class="article-info__item read-time">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-icon.svg" alt="Read time">
                                 <p><?php echo SCF::get('read_time_min'); esc_html_e(' MIN'); ?></p>
                              </div>
                              <div class="article-info__item article-date">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-icon.svg" alt="Date">
                                 <p><?php the_time('M j, Y'); ?></p>
                              </div>
                           </div>
                           <h3 class="article-title"><?php the_title(); ?></h3>
                           <p class="article-text"><?php the_excerpt(); ?></p>
                        </div>         
                     </a>

                  <?php endwhile; endif; ?>

               </div>
               <div class="pagination">
                  <?php wp_pagenavi(); ?>
               </div>
            </div>

            <!-- Sidebar -->
            <?php get_sidebar(); ?>
         </div>

         <?php $articles = SCF::get( 'popular_articles', 50 );
         if ($articles) { ?>
            <div class="popular-articles">
               <h2 class="title"><?php echo SCF::get('articles_title', 50); ?></h2>
               <div class="popular-slider">
                  <?php foreach ( $articles as $post_id ){
                     $the_post = get_post( $post_id );
                     if (SCF::get('image_popular_articles', $post_id)) {
                        $imageUrl = wp_get_attachment_image_url( SCF::get('image_popular_articles', $post_id), 'large' );
                     } else{
                        $imageUrl = get_the_post_thumbnail_url($post_id);
                     } ?>
                     <a href="<?php echo $the_post->post_name;?>" class="popular-item" style="background-image: url(<?php echo $imageUrl; ?>);">
                        <div class="slider-blackout"></div>
                        <p><?php echo $the_post->post_title;?></p>
                     </a>
                  <?php } ?>
               </div>
            </div>
         <?php } ?>

      </div>
   </div>

   <?php get_footer(); ?>