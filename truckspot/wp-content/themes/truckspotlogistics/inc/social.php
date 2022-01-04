<div class="social">
	<?php if (SCF::get('social_facebook_link', 5)): ?>
		<a href="<?php echo SCF::get('social_facebook_link', 5); ?>" class="social-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook">
		</a>
	<?php endif ?>
	<?php if (SCF::get('social_instagram_link', 5)): ?>
		<a href="<?php echo SCF::get('social_instagram_link', 5); ?>" class="social-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram">
		</a>
	<?php endif ?>
	<?php if (SCF::get('social_twitter_link', 5)): ?>
		<a href="<?php echo SCF::get('social_twitter_link', 5); ?>" class="social-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter">
		</a>
	<?php endif ?>
	<?php if (SCF::get('social_linkedin_link', 5)): ?>
		<a href="<?php echo SCF::get('social_linkedin_link', 5); ?>" class="social-item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="Linkedin">
		</a>
	<?php endif ?>
</div>