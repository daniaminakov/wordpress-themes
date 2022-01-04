<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<div class="header-up">
				<!-- Social -->
				<?php require get_template_directory() . '/inc/social.php'; ?>
				
				<div class="header-contact">
					<?php if (SCF::get('phone', 5)): ?>
						<a href="<?php echo SCF::get('phone_link', 5); ?>" class="header-contact__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="Phone">
							<p><?php echo SCF::get('phone', 5); ?></p>
						</a>
					<?php endif ?>
					<?php if (SCF::get('email', 5)): ?>
						<a href="mailto:<?php echo SCF::get('email', 5); ?>" class="header-contact__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-icon.svg" alt="Email">
							<p><?php echo SCF::get('email', 5); ?></p>
						</a>
					<?php endif ?>
				</div>
			</div>
		</div>
		<hr class="header-hr">
		<div class="header-fixed">
			<div class="container">
				<div class="header-main">
					<div class="header-main-content">
						<a href="/" class="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-img.svg" alt="Logo img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-text.svg" alt="Logo text">
						</a>
						<div class="header-wrapper">
							<?php if ( is_front_page() ) {
								wp_nav_menu( [
									'theme_location'  => 'menu-header-home',
									'menu'            => 'ul',
									'container'       => 'nav',
									'menu_class'      => 'header-menu', 
								] );
							} else{
								wp_nav_menu( [
									'theme_location'  => 'menu-header',
									'menu'            => 'ul',
									'container'       => 'nav',
									'menu_class'      => 'header-menu', 
								] );
							} ?>
							<!-- Mobile -->
							<div class="info-mobile">
								<div class="container">
									<div class="header-contact">
										<?php if (SCF::get('phone', 5)): ?>
											<a href="<?php echo SCF::get('phone_link', 5); ?>" class="header-contact__item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="Phone">
												<p><?php echo SCF::get('phone', 5); ?></p>
											</a>
										<?php endif ?>
										<?php if (SCF::get('email', 5)): ?>
											<a href="mailto:<?php echo SCF::get('email', 5); ?>" class="header-contact__item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-icon.svg" alt="Email">
												<p><?php echo SCF::get('email', 5); ?></p>
											</a>
										<?php endif ?>
									</div>
									<a href="/vehicle-shipping-quote/" class="header-main-btn btn2">
										<?php esc_html_e('Get My Free Quote'); ?>
									</a>
									<!-- Social -->
									<?php require get_template_directory() . '/inc/social.php'; ?>
								</div>
							</div>
						</div>
						<div class="burger-menu">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<!-- Mobile-END -->
					</div>
					<a href="/vehicle-shipping-quote/" class="header-main-btn btn2">
						<?php esc_html_e('Get My Free Quote'); ?>
					</a>
				</div>
				<div class="services-container">
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-services',
						'menu'            => 'ul',
						'container'       => 'nav',
						'menu_class'      => 'services-menu',
					] ); ?>
					<a href="/services/" class="services-btn transp-btn btn2">
						<?php esc_html_e('View All Services'); ?>
					</a>
				</div>
			</div>
		</div>
	</header>

