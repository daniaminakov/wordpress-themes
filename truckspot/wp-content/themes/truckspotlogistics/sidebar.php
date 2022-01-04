
<aside class="sidebar">

	<!-- If single page -->
	<?php if ( is_single() ) { 

		$articles = SCF::get( 'trending_articles');

		if ($articles) { ?>
			<div class="sidebar-info sidebar-item">
				<h3 class="sidebar-info__title"><?php esc_html_e('Trending Articles'); ?></h3>
				<hr>
				<div class="sidebar-articles">

					<?php foreach ( $articles as $post_id ){
						$the_post = get_post( $post_id ); ?>
						<a href="<?php echo get_permalink($post_id); ?>" class="sidebar-article">
							<?php if (SCF::get('another_image', $post_id)) {
								$imageUrl = wp_get_attachment_image_url( SCF::get('another_image', $post_id), 'large' );
							} else{
								$imageUrl = get_the_post_thumbnail_url($post_id);
							} ?>
							<div class="sidebar-article__img" style="background-image: url(<?php echo $imageUrl; ?>);">
							</div>

							<p class="sidebar-article__text"><?php echo $the_post->post_title;?></p>
						</a>
					<?php } ?>

				</div>
			</div>
		<?php } } ?>
		<!-- END single page -->

		<div class="sidebar-start sidebar-item">
			<h3 class="sidebar-start__title"><?php echo SCF::get('sidebar_title', 5); ?></h3>
			<a href="<?php echo SCF::get('sidebar_button_url', 5); ?>" class="btn1"><?php echo SCF::get('sidebar_button_text', 5); ?></a>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-img.svg" alt="Sidebar img">
		</div>

		<!-- If single page -->
		<?php if ( is_single() ) { ?>
			<div class="sidebar-info sidebar-item sidebar-share">
				<p class="sidebar-info__title"><?php esc_html_e('Share on:'); ?></p>
				<hr>
				<div class="sidebar-social">
					<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" class="sidebar-social__item" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.svg" alt="Facebook">
					</a>
					<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=my_hashtag" class="sidebar-social__item" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.svg" alt="Twitter">
					</a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" class="sidebar-social__item" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedIn-icon.svg" alt="LinkedIn">
					</a>
				</div>
			</div>
			<!-- END single page -->

			<!-- Blog page -->
		<?php } elseif( is_home() || is_category() ) {

			$categories = get_categories();
			if ($categories) { ?>
				<div class="sidebar-info sidebar-item">
					<h3 class="sidebar-info__title"><?php esc_html_e('Categories:'); ?></h3>
					<hr>
					<ul class="sidebar-info-list">

						<?php foreach( $categories as $category ){ ?>
							<li class="sidebar-info-list__item">
								<a href="<?php echo get_category_link( $category->term_id ); ?>">
									<h3><?php echo $category->name; ?></h3>
								</a>
							</li>
						<?php } ?>
						
					</ul>
				</div>
			<?php } ?>
			<!-- END Blog page -->

			<!-- Other page -->
		<?php } else { ?>
			<div class="sidebar-info sidebar-item">
				<?php if (SCF::get('phone', 5)): ?>
					<div class="sidebar-contact-item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="Phone">
						<div class="sidebar-contact__content">
							<p><?php esc_html_e('Phone:'); ?></p>
							<span><?php echo SCF::get('phone', 5); ?></span>
						</div>
					</div>
				<?php endif ?>
				<hr>
				<?php if (SCF::get('email', 5)): ?>
					<div class="sidebar-contact-item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-icon.svg" alt="Email">
						<div class="sidebar-contact__content">
							<p><?php esc_html_e('Email:'); ?></p>
							<span><?php echo SCF::get('email', 5); ?></span>
						</div>
					</div>
				<?php endif ?>
			</div>
		<?php } ?>
	</aside>