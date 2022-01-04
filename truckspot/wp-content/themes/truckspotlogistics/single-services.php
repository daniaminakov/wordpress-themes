<?php

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<section class="section-top services-section-top greyBack">
	<div class="big-container container">
		<div class="section-top-wrapper">
			<div class="section-top-content">
				<h1><?php echo SCF::get('service_title'); ?></h1>
				<p class="section-top__text"><?php echo SCF::get('service_text'); ?></p>
				<a href="<?php echo SCF::get('service_button_url'); ?>" class="section-top-btn btn1"><?php echo SCF::get('service_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-btn.svg" alt=""></a>
			</div>
			<div class="section-top-img">
				<?php echo wp_get_attachment_image(SCF::get('service_image'), 'large'); ?>
				<a href="<?php echo SCF::get('service_button_url'); ?>" class="section-top-btn btn1"><?php echo SCF::get('service_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-btn.svg" alt=""></a>
			</div>
		</div>
	</div>
</section>


<section class="offer">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('transport_services_title'); ?></h2>
		<div class="offer-wrapper">
			<div class="offer-img">
				<?php echo wp_get_attachment_image(SCF::get('transport_services_image'), 'large'); ?>
			</div>
			<div class="offer-box">
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item1_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item1_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item1_text'); ?></p>
					</div>
				</div>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item2_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item2_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item2_text'); ?></p>
					</div>
				</div>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item3_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item3_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item3_text'); ?></p>
					</div>
				</div>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item4_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item4_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item4_text'); ?></p>
					</div>
				</div>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item5_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item5_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item5_text'); ?></p>
					</div>
				</div>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item6_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item6_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item6_text'); ?></p>
					</div>
				</div>
				<?php if ( SCF::get('transport_services_item7_title') || SCF::get('transport_services_item7_text') ): ?>
				<div class="offer-item">
					<div class="offer-item__icon">
						<?php echo wp_get_attachment_image(SCF::get('transport_services_item7_icon')); ?>
					</div>
					<div class="offer-item__info">
						<h3><?php echo SCF::get('transport_services_item7_title'); ?></h3>
						<p><?php echo SCF::get('transport_services_item7_text'); ?></p>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
	<a href="<?php echo SCF::get('transport_services_button_url'); ?>" class="btn1"><?php echo SCF::get('transport_services_button_text'); ?></a>
</div>
</section>

<section class="how">
	<div class="container">
		<h2 class="title"><?php echo SCF::get('how_title'); ?></h2>
		<p class="subtitle"><?php echo SCF::get('how_subtitle'); ?></p>
		<div class="how-item">
			<div class="how-item__img">
				<?php echo wp_get_attachment_image(SCF::get('how_item_1_image')); ?>
				<div class="how-number"><?php esc_html_e('01'); ?></div>
			</div>
			<div class="how-item__content">
				<h3><?php echo SCF::get('how_item_1_title'); ?></h3>
				<?php echo SCF::get('how_item_1_text'); ?>
			</div>
		</div>
		<div class="how-item how-item2">
			<div class="how-item__content">
				<h3><?php echo SCF::get('how_item_2_title'); ?></h3>
				<?php echo SCF::get('how_item_2_text'); ?>
			</div>
			<div class="how-item__img">
				<div class="how-number"><?php esc_html_e('02'); ?></div>
				<?php echo wp_get_attachment_image(SCF::get('how_item_2_image')); ?>
			</div>
		</div>
		<div class="how-item">
			<div class="how-item__img">
				<?php echo wp_get_attachment_image(SCF::get('how_item_3_image')); ?>
				<div class="how-number"><?php esc_html_e('03'); ?></div>
			</div>
			<div class="how-item__content">
				<h3><?php echo SCF::get('how_item_3_title'); ?></h3>
				<?php echo SCF::get('how_item_3_text'); ?>
			</div>
		</div>
		<a href="<?php echo SCF::get('how_button_url'); ?>" class="btn1"><?php echo SCF::get('how_button_text'); ?></a>
	</div>
</section>



<!-- 1 -->
<?php if ( SCF::get('show_car_shipping_benefits') ) { ?>

	<section class="benefits greyBack">
		<div class="container">
			<h2 class="title"><?php echo SCF::get('benefits_title'); ?></h2>

			<?php $benefits = SCF::get( 'benefits' );
			if ($benefits) { ?>
				<div class="benefits-wrapper">
					<?php foreach ( $benefits as $item ){ ?>
						<div class="benefits-item">
							<div class="benefits-icon">
								<?php echo wp_get_attachment_image($item['benefits_item_icon']); ?>
							</div>
							<h3><?php echo $item['benefits_item_title']; ?></h3>
							<p><?php echo $item['benefits_item_text']; ?></p>
						</div>
					<?php } ?>
				</div>
			<?php } ?>

		</div>
	</section>

	<div class="container">
		<div class="small-block small-block-center">
			<p><?php echo SCF::get('benefits_block_title'); ?></p>
			<a href="<?php echo SCF::get('benefits_block_button_url'); ?>" class="footer-btn btn2"><?php echo SCF::get('benefits_block_button_text'); ?></a>
		</div>
	</div>

<?php } ?>


<!-- 2 -->
<?php if ( SCF::get('show_how_much_does_it_cost') ) { ?>

	<section class="cost greyBack">
		<div class="container">
			<h2 class="title"><?php echo SCF::get('how_much_title'); ?></h2>
			<div class="wrapper cost-wrapper">
				<div class="tabs cost-tabs">
					<span class="tab cost-tab"><h3><?php echo SCF::get('shipping_cost_title'); ?></h3></span>
					<span class="tab cost-tab"><h3><?php echo SCF::get('transit_time_title'); ?></h3></span>
				</div>
				<div class="tab_content">
					<div class="tab_item">
						<table class="cost-table" border="0">
							<tr>
								<th>Origin</th>
								<th>Destination</th>
								<th>Average cost</th>
								<th>Cost per mile</th>
							</tr>
							<?php $costTableRows = SCF::get( 'shipping_cost_table' );
							foreach ( $costTableRows as $item ){ ?>
								<tr>
									<td><?php echo $item['shipping_cost_origin']; ?></td>
									<td><?php echo $item['shipping_cost_destination']; ?></td>
									<td><?php echo $item['shipping_cost_average_cost']; ?></td>
									<td><?php echo $item['shipping_cost_cost_per_mile']; ?></td>
								</tr>
							<?php } ?>
						</table>
						<div class="mobile-table">
							<?php $costTableRows = SCF::get( 'shipping_cost_table' );
							foreach ( $costTableRows as $item ){ ?>
								<div class="mobile-table-wrapper">
									<div class="mobile-table__item">
										<p class="mobile-table-title">Origin</p>
										<p class="mobile-table-text"><?php echo $item['shipping_cost_origin']; ?></p>
									</div>
									<div class="mobile-table__item">
										<p class="mobile-table-title">Destination</p>
										<p class="mobile-table-text"><?php echo $item['shipping_cost_destination']; ?></p>
									</div>
									<div class="mobile-table__item">
										<p class="mobile-table-title">Average cost</p>
										<p class="mobile-table-text"><?php echo $item['shipping_cost_average_cost']; ?></p>
									</div>
									<div class="mobile-table__item">
										<p class="mobile-table-title">Cost per mile</p>
										<p class="mobile-table-text"><?php echo $item['shipping_cost_cost_per_mile']; ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab_item">
						<table class="cost-table transit-table table-center" border="0">
							<tr>
								<th>Mileage</th>
								<th>*Average Transit Time(estimated distance)</th>
							</tr>
							<?php $costTableRows = SCF::get( 'transit_time_table' );
							foreach ( $costTableRows as $item ){ ?>
								<tr>
									<td><?php echo $item['transit_time_mileage']; ?></td>
									<td><?php echo $item['transit_time_average']; ?></td>
								</tr>
							<?php } ?>
						</table>
						<div class="mobile-table">
							<?php $costTableRows = SCF::get( 'transit_time_table' );
							foreach ( $costTableRows as $item ){ ?>
								<div class="mobile-table-wrapper">
									<div class="mobile-table__item">
										<p class="mobile-table-title">Mileage</p>
										<p class="mobile-table-text"><?php echo $item['transit_time_mileage']; ?></p>
									</div>
									<div class="mobile-table__item">
										<p class="mobile-table-title">*Average Transit Time</p>
										<p class="mobile-table-text"><?php echo $item['transit_time_average']; ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
						<p class="under-text"><?php echo SCF::get('transit_time_under_text'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>

<!-- 3 -->
<?php if ( SCF::get('show_recent_shipments') ) { ?>

	<section class="recent">
		<div class="container">
			<h2 class="title"><?php echo SCF::get('recent_shipments_title'); ?></h2>
			<div class="recent-wrapper">
				<a href="/vehicle-shipping-quote/" class="recent-item">
					<div class="recent-img">
						<?php echo wp_get_attachment_image(SCF::get('recent_shipments_item1_image'), 'large'); ?>
					</div>
					<div class="recent-content">
						<p class="recent-title"><?php echo SCF::get('recent_shipments_item1_title'); ?></p>
						<div class="recent-info">
							<div class="recent-locations">
								<div class="recent-locations__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations-way.svg" alt="Way">
								</div>
								<div class="recent-locations__content">
									<p><?php echo SCF::get('recent_shipments_item1_first_city'); ?></p>
									<p><?php echo SCF::get('recent_shipments_item1_second_city'); ?></p>
								</div>
							</div>
							<p class="recent-price"><?php echo SCF::get('recent_shipments_item1_price'); ?></p>
						</div>
					</div>
				</a>
				<a href="/vehicle-shipping-quote/" class="recent-item">
					<div class="recent-img">
						<?php echo wp_get_attachment_image(SCF::get('recent_shipments_item2_image'), 'large'); ?>
					</div>
					<div class="recent-content">
						<p class="recent-title"><?php echo SCF::get('recent_shipments_item2_title'); ?></p>
						<div class="recent-info">
							<div class="recent-locations">
								<div class="recent-locations__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations-way.svg" alt="Way">
								</div>
								<div class="recent-locations__content">
									<p><?php echo SCF::get('recent_shipments_item2_first_city'); ?></p>
									<p><?php echo SCF::get('recent_shipments_item2_second_city'); ?></p>
								</div>
							</div>
							<p class="recent-price"><?php echo SCF::get('recent_shipments_item2_price'); ?></p>
						</div>
					</div>
				</a>
				<a href="/vehicle-shipping-quote/" class="recent-item">
					<div class="recent-img">
						<?php echo wp_get_attachment_image(SCF::get('recent_shipments_item3_image'), 'large'); ?>
					</div>
					<div class="recent-content">
						<p class="recent-title"><?php echo SCF::get('recent_shipments_item3_title'); ?></p>
						<div class="recent-info">
							<div class="recent-locations">
								<div class="recent-locations__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations-way.svg" alt="Way">
								</div>
								<div class="recent-locations__content">
									<p><?php echo SCF::get('recent_shipments_item3_first_city'); ?></p>
									<p><?php echo SCF::get('recent_shipments_item3_second_city'); ?></p>
								</div>
							</div>
							<p class="recent-price"><?php echo SCF::get('recent_shipments_item3_price'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

<?php } ?>

<!-- 4 -->
<?php if ( SCF::get('show_what_we_offer') ) { ?>

	<section class="what">
		<div class="container">
			<h2 class="title"><?php echo SCF::get('we_offer_title'); ?></h2>
			<div class="what-wrapper">
				<div class="what-item">
					<?php echo wp_get_attachment_image(SCF::get('we_offer_item1_icon')); ?>
					<h3><?php echo SCF::get('we_offer_item1_title'); ?></h3>
					<p><?php echo SCF::get('we_offer_item1_text'); ?></p>
				</div>
				<div class="what-item">
					<?php echo wp_get_attachment_image(SCF::get('we_offer_item2_icon')); ?>
					<h3><?php echo SCF::get('we_offer_item2_title'); ?></h3>
					<p><?php echo SCF::get('we_offer_item2_text'); ?></p>
				</div>
				<div class="what-item">
					<?php echo wp_get_attachment_image(SCF::get('we_offer_item3_icon')); ?>
					<h3><?php echo SCF::get('we_offer_item3_title'); ?></h3>
					<p><?php echo SCF::get('we_offer_item3_text'); ?></p>
				</div>
				<div class="what-item">
					<?php echo wp_get_attachment_image(SCF::get('we_offer_item4_icon')); ?>
					<h3><?php echo SCF::get('we_offer_item4_title'); ?></h3>
					<p><?php echo SCF::get('we_offer_item4_text'); ?></p>
				</div>
				<div class="what-item">
					<?php echo wp_get_attachment_image(SCF::get('we_offer_item5_icon')); ?>
					<h3><?php echo SCF::get('we_offer_item5_title'); ?></h3>
					<p><?php echo SCF::get('we_offer_item5_text'); ?></p>
				</div>
			</div>
			<a href="<?php echo SCF::get('we_offer_button_url'); ?>" class="btn1"><?php echo SCF::get('we_offer_button_text'); ?></a>
		</div>
	</section>

<?php } ?>

<section class="faq">
	<?php include get_template_directory() . '/inc/questions-wrapper.php'; ?>
</section>



<?php get_footer(); ?>