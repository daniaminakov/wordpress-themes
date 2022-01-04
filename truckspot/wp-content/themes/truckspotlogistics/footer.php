<?php if (!is_page( '115' )) { ?>
	<div class="footer-small-block <?php if( is_front_page() ){echo 'footer-small-home';} ?>">
		<div class="container">
			<div class="small-block">
				<p><?php echo SCF::get('footer_block_title', 5); ?></p>
				<div class="small-block-buttons">
					<a href="<?php echo SCF::get('footer_block_button_url', 5); ?>" class="footer-btn btn2"><?php echo SCF::get('footer_block_button_text', 5); ?></a>
					<a href="<?php echo SCF::get('footer_block_call_url', 5); ?>" class="footer-btn transp-btn btn2"><?php echo SCF::get('footer_block_call_text', 5); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<footer class="footer <?php if( is_front_page() ){echo 'footer-home';}else{echo 'greyBack';} ?>">
	<div class="container">
		<div class="footer-wrapper">
			<a href="/" class="logo logo-footer">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-img.svg" alt="Logo img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-text2.svg" alt="Logo text">
			</a>
			<div class="footer-info">
				<div class="footer-info__item">
					<h3><?php echo SCF::get('footer_menu_item1_title', 5); ?></h3>
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-services',
						'menu'            => 'ul',
						'container'       => 'nav',
						'menu_class'      => 'services-footer',
					] ); ?>
				</div>
				<div class="footer-info__item">
					<h3><?php echo SCF::get('footer_menu_item2_title', 5); ?></h3>
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-information',
						'menu'            => 'ul',
						'container'       => 'nav',
						'menu_class'      => 'information-footer',
					] ); ?>
				</div>
			</div>
			<div class="footer-info__item">
				<h3><?php echo SCF::get('footer_menu_item3_title', 5); ?></h3>
				<!-- Social -->
				<?php require get_template_directory() . '/inc/social.php'; ?>
			</div>
		</div>
	</div>
	<div class="footer-mobile">
		<div class="footer-mobile__item">
			<div class="container">
				<h3><span class="footer-item-arrow one"></span><?php echo SCF::get('footer_menu_item1_title', 5); ?><span class="footer-item-arrow two"></h3>
				<div class="footer-mobile-content">
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-services',
						'menu'            => 'ul',
						'container'       => 'nav',
						'menu_class'      => 'services-footer',
					] ); ?>
				</div>
			</div>
		</div>
		<div class="footer-mobile__item">
			<div class="container">
				<h3><span class="footer-item-arrow one"><?php echo SCF::get('footer_menu_item2_title', 5); ?><span class="footer-item-arrow two"></h3>
				<div class="footer-mobile-content">
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-information',
						'menu'            => 'ul',
						'container'       => 'nav',
						'menu_class'      => 'information-footer',
					] ); ?>
				</div>
			</div>
		</div>
		<div class="footer-mobile-social container">
			<h3><?php echo SCF::get('footer_menu_item3_title', 5); ?></h3>
			<!-- Social -->
			<?php require get_template_directory() . '/inc/social.php'; ?>
		</div>
	</div>
	<div class="copyright"><?php echo SCF::get('footer_copyright', 5); ?></div>
</footer>

<!-- Form loader -->
<div id="form_loader">
	<div id="gear"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gear.svg" alt="Gear"></div>
</div>

<!-- Form submit -->
<div class="form-success">
	<div class="form-success-wrapper">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/success.svg" alt="Success">
		<p class="thanks-title"><?php esc_html_e('Thank you!'); ?></p>
		<p class="thanks-text"><?php esc_html_e('Your submission has been sent.'); ?></p>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>