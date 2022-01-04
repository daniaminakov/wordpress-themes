<?php

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-container">
	<div class="container">
		<h1 class="title-page"><?php esc_html_e('Our Shipping Services'); ?></h1>
		<div class="main-wrapper">
			<div class="main-content ourServices">

				<?php $posts = get_posts( array(
					'post_type' => 'services',
				) ); ?>

				<?php foreach( $posts as $post ) :
					setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>" class="ourServices-item">
						<div class="ourServices-item__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="ourServices-item__info">
							<div class="ourServices-item__info-icon">
								<?php echo wp_get_attachment_image(SCF::get('services_icon')); ?>
							</div>
							<div class="ourServices-item__info-content">
								<h2><?php the_title(); ?></h2>
								<div class="link"><?php esc_html_e('Read more'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link-arrow.svg" alt="Link arrow"></div>
							</div>
						</div>
					</a>
				<?php endforeach; wp_reset_postdata(); ?>
				
			</div>

			<!-- Sidebar -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>