<?php

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-container">
	<div class="container">
		<div class="main-wrapper single-wrapper">
			<div class="main-content">
				<div class="single-img">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="article-info single-info">
					<div class="article-info__item read-time">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-icon.svg" alt="Read time">
						<p><?php echo SCF::get('read_time_min'); esc_html_e(' MIN'); ?></p>
					</div>
					<div class="article-info__item article-date">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-icon.svg" alt="Date">
						<p><?php the_time('M j, Y'); ?></p>
					</div>
				</div>
				<h1><?php the_title(); ?></h1>
				<div class="single-content">
					<?php the_content(); ?>
				</div>
				<?php comments_template(); ?>
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
						<a href="<?php echo get_permalink($post_id); ?>" class="popular-item" style="background-image: url(<?php echo $imageUrl; ?>);">
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