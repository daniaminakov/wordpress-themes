<div class="container">
	<h2 class="title"><?php echo SCF::get('faq_title'); ?></h2>
	<div class="questions-wrapper">
		<?php $questions = SCF::get( 'questions' ); ?>

		<?php $numItems = count($questions);
		$i = 0; ?>
		<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[<?php foreach ( $questions as $item ): if(++$i === $numItems) {?>{"@type":"Question","name":"<?php echo $item['question_title']; ?>","acceptedAnswer":[{"@type":"Answer","text":"<?php echo $item['question_text']; ?>"}]}<?php } else{ ?>{"@type":"Question","name":"<?php echo $item['question_title']; ?>","acceptedAnswer":[{"@type":"Answer","text":"<?php echo $item['question_text']; ?>"}]},<?php } endforeach; ?>]}</script>

		<?php foreach ( $questions as $item ){ ?>
			<details class="questions-details" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<summary itemprop="name">
					<h3><?php echo $item['question_title']; ?></h3>
					<span class="summary-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/details-arrow.svg" alt="Arrow"></span>
				</summary>
				<div class="questions-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text">
						<p><?php echo $item['question_text']; ?></p>
					</div>
				</div>
			</details>
		<?php } ?>

	</div>
</div>