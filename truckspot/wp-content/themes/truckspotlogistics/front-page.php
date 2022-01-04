<?php

get_header(); ?>

<section class="section-top greyBack">
	<div class="big-container container">
		<div class="section-top-wrapper">
			<div class="section-top-content">
				<p class="section-top__subtitle"><?php echo SCF::get('header_subtitle'); ?></p>
				<h1><?php echo SCF::get('header_title'); ?></h1>
				<p class="section-top__text"><?php echo SCF::get('header_text'); ?></p>
				<a href="<?php echo SCF::get('header_url_button'); ?>" class="section-top-btn btn1"><?php echo SCF::get('header_text_button'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-btn.svg" alt="Request quotes"></a>
			</div>
			<div class="section-top-img">
				<?php echo wp_get_attachment_image(SCF::get('header_image')); ?>
			</div>
		</div>
	</div>
</section>

<section class="shippingServices">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('services_title'); ?></h2>
		<div class="shippingServices-wrapper">

			<?php $posts = get_posts( array('post_type' => 'services') ); ?>

			<?php foreach( $posts as $post ) :
				setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>" class="shippingServices-item">
					<div class="shippingServices-item-content">
						<div class="shippingServices-item__front">
							<?php echo wp_get_attachment_image(SCF::get('services_icon')); ?>
							<hr>
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="shippingServices-item__back">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<div class="link"><?php esc_html_e('Read more'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link-arrow.svg" alt="Link arrow"></div>
						</div>
					</div>
				</a>
			<?php endforeach; wp_reset_postdata(); ?>

		</div>
		<a href="<?php echo SCF::get('services_button_url'); ?>" class="shippingServices-btn transp-btn btn2"><?php echo SCF::get('services_button_text'); ?></a>
	</div>
</section>


<section class="logistics greyBack">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('who_are_title'); ?></h2>
		<div class="logistics-wrapper">
			<div class="logistics-img">
				<?php echo wp_get_attachment_image(SCF::get('who_are_image'), 'full'); ?>
			</div>
			<div class="logistics-content">
				<div class="logistics-tabs">
					<h3 class="logistics-tabs__item"><?php echo SCF::get('who_are_slider_title_1'); ?></h3>
					<h3 class="logistics-tabs__item"><?php echo SCF::get('who_are_slider_title_2'); ?></h3>
					<h3 class="logistics-tabs__item"><?php echo SCF::get('who_are_slider_title_3'); ?></h3>        
				</div>
				<div class="logistics-slider">
					<div class="logistics-slider__item"><?php echo SCF::get('who_are_slider_text_1'); ?></div>
					<div class="logistics-slider__item"><?php echo SCF::get('who_are_slider_text_2'); ?></div>
					<div class="logistics-slider__item"><?php echo SCF::get('who_are_slider_text_3'); ?></div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<div class="container">
	<div class="small-block small-block-center">
		<p><?php echo SCF::get('who_are_block_title'); ?></p>
		<a href="<?php echo SCF::get('who_are_block_button_url'); ?>" class="footer-btn btn2"><?php echo SCF::get('who_are_block_button_text'); ?></a>
	</div>
</div>

<section class="how" id="how">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('home_how_title'); ?></h2>
		<p class="subtitle"><?php echo SCF::get('home_how_subtitle'); ?></p>
		<div class="how-item">
			<div class="how-item__img">
				<?php echo wp_get_attachment_image(SCF::get('home_how_item_1_image')); ?>
				<div class="how-number"><?php esc_html_e('01'); ?></div>
			</div>
			<div class="how-item__content">
				<h3><?php echo SCF::get('home_how_item_1_title'); ?></h3>
				<?php echo SCF::get('home_how_item_1_text'); ?>
			</div>
		</div>
		<div class="how-item how-item2">
			<div class="how-item__content">
				<h3><?php echo SCF::get('home_how_item_2_title'); ?></h3>
				<?php echo SCF::get('home_how_item_2_text'); ?>
			</div>
			<div class="how-item__img">
				<div class="how-number"><?php esc_html_e('02'); ?></div>
				<?php echo wp_get_attachment_image(SCF::get('home_how_item_2_image')); ?>
			</div>
		</div>
		<div class="how-item">
			<div class="how-item__img">
				<?php echo wp_get_attachment_image(SCF::get('home_how_item_3_image')); ?>
				<div class="how-number"><?php esc_html_e('03'); ?></div>
			</div>
			<div class="how-item__content">
				<h3><?php echo SCF::get('home_how_item_3_title'); ?></h3>
				<?php echo SCF::get('home_how_item_3_text'); ?>
			</div>
		</div>
		<a href="<?php echo SCF::get('home_how_button_url'); ?>" class="btn1"><?php echo SCF::get('home_how_button_text'); ?></a>
	</div>
</section>

<section class="coverageMap greyBack">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('map_title'); ?></h2>
		<p class="subtitle"><?php echo SCF::get('map_subtitle'); ?></p>
		<div class="coverageMap-wrapper map_chioce">
			<div class="coverageMap-img">
				<?php include get_template_directory() . '/assets/images/map.svg'; ?>
			</div>
			<form class="form-map">
				<p class="form-map-title"><?php echo SCF::get('map_form_title'); ?></p>
				<div class="form-map-item">
					<p class="label label-map">From</p>
					<div class="select-inp">
						<input type="text" placeholder="Сhoose state" list="state_from" name="state_from" autocomplete="off" class="inp rule-select" required>
					</div>
					<datalist id="state_from" class="state_list"></datalist>
				</div>
				<div class="form-map-item two">
					<p class="label label-map">To</p>
					<div class="select-inp">
						<input type="text" placeholder="Сhoose state" list="state_to" name="state_to" autocomplete="off" class="inp rule-select" required>
					</div>
					<datalist id="state_to" class="state_list"></datalist>
				</div>
				<button class="btn1 btn-form map_continue" type="submit">Continue</button>
			</form>
		</div>
		<div class="coverageMap-wrapper map_finish">
			<div class="coverageMap-img">
				<div class="distance-review">
					<div class="distance-review__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/author.png" alt="Author">
					</div>
					<div class="distance-review__content">
						<p class="distance-review__name"><span>Charles Cooper</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-img.svg" alt="Logo"></p>
						<div class="stars"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.svg" alt="Stars"></div>
						<p class="distance-review__text">Positive: Professionalism, Punctuality, Quality, Value</p>
					</div>
				</div>
				<div class="map">
					<div class="name-state name-point-from"><span>State from</span> <div class="name-state-remove" state-inp="state_from"></div></div>
					<div class="name-state name-point-to"><span>State to</span> <div class="name-state-remove" state-inp="state_to"></div></div>
					<?php include get_template_directory() . '/assets/images/map.svg'; ?>
				</div>
			</div>
			<div class="map-finish-wrapp">
				<div class="form-map">
					<div class="state-name-wrapp">
						<p class="label label-map state-name-from">State from</p>
						<div class="name-state-remove" state-inp="state_from"></div>
					</div>
					<p class="distance"><span>0</span>Ml</p>
					<div class="state-name-wrapp">
						<p class="label label-map state-name-to">State to</p>
						<div class="name-state-remove" state-inp="state_to"></div>
					</div>
				</div>
				<a href="/vehicle-shipping-quote/" class="btn1 btn-form btn-shipment">Book Your Shipment<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-btn.svg" alt="Request quotes"></a>
			</div>
		</div>
	</div>
</section>


<section class="why" id="why">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('home_why_title'); ?></h2>
		<div class="why-wrapper">
			<div class="why-item">
				<div class="why-item__img">
					<?php echo wp_get_attachment_image(SCF::get('home_why_item_1_image')); ?>
				</div>
				<h3 class="why-item__title"><?php echo SCF::get('home_why_item_1_title'); ?></h3>
				<p class="why-item__text"><?php echo SCF::get('home_why_item_1_text'); ?></p>
				<?php echo SCF::get('home_why_item_1_list'); ?>
			</div>
			<div class="why-item">
				<div class="why-item__img">
					<?php echo wp_get_attachment_image(SCF::get('home_why_item_2_image')); ?>
				</div>
				<h3 class="why-item__title"><?php echo SCF::get('home_why_item_2_title'); ?></h3>
				<p class="why-item__text"><?php echo SCF::get('home_why_item_2_text'); ?></p>
				<?php echo SCF::get('home_why_item_2_list'); ?>
			</div>
			<div class="why-item">
				<div class="why-item__img">
					<?php echo wp_get_attachment_image(SCF::get('home_why_item_3_image')); ?>
				</div>
				<h3 class="why-item__title"><?php echo SCF::get('home_why_item_3_title'); ?></h3>
				<p class="why-item__text"><?php echo SCF::get('home_why_item_3_text'); ?></p>
				<?php echo SCF::get('home_why_item_3_list'); ?>
			</div>
		</div>
		<div class="small-block">
			<p><?php echo SCF::get('why_block_title'); ?></p>
			<a href="<?php echo SCF::get('why_block_button_url'); ?>" class="footer-btn btn2"><?php echo SCF::get('why_block_button_text'); ?></a>
		</div>
	</div>
</section>


<section class="customers">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('review_title'); ?></h2>
		<div class="customers-wrapper">

			<?php $reviews = SCF::get( 'reviews' );
			foreach ( $reviews as $item ){ ?>
				<div class="customers-item">
					<div class="customers-top">
						<div class="author-img">
							<?php echo wp_get_attachment_image($item['review_author_image']); ?>
						</div>
						<div class="customers-top-info">
							<p class="name"><?php echo $item['review_name']; ?></p>
							<div class="stars">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.svg" alt="Rating">
							</div>
						</div>
					</div>
					<p class="customers-text"><?php echo $item['review_text']; ?></p>
				</div>
			<?php } ?>

		</div>
	</div>
</section>


<section class="faq greyBack" id="faq">
	<?php include get_template_directory() . '/inc/questions-wrapper.php'; ?>
</section>

<?php get_footer(); ?>