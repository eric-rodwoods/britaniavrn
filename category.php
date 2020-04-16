<?php get_header(); ?>

	<section class="page-content">
		<div class="container mb-3 mt-3">

			<div class="row">
				<div class="col-12 col-md-9">

				<?php if (is_category( 2 )) { ?>
					<div class="page__info">
						<h1><?php single_cat_title(); ?></h1>
						<div class="page__info-text"><?php echo category_description();?></div>		
					</div>
				<?php } ?>

				<?php if (is_category( 7 )) { ?>
					<div class="page__info">
						<h2><?php echo get_cat_name( 7 ); ?></h2>
						<div class="page__info-text"><?php echo category_description( 7 );?></div>
					</div>

					<div class="row justify-content-center">
					<?php $q = new WP_Query('cat=7&posts_per_page=-1');
						if($q->have_posts()) {	while($q->have_posts()){ $q->the_post();
				 			if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
								$thmb = $thumb[0]; }
								else {
								$thmb = 'https://picsum.photos/190/310'; }	?>

						<div class="col-12 col-sm-6 col-lg-5 mb-4">
							<div class="tariff__info-category">
								<div class="tariff__info-card">
									<div class="tariff__card__info"><?php the_excerpt( 7 );?></div>
									<a class="tariff__card-link" href="<?php echo get_permalink(); ?>">
										<div class="tariff__card__decoration">Подробнее </div>
									</a>
								</div>
								<div class="tariff__name-category"><?php the_field('imja_tarifa') ?></div>
								<div class="tariff__rate-category"><?php the_field('discount') ?></div>
								<div class="tariff__desc-category"><?php the_field('tariff-desc') ?></div>
							</div>
						</div>

						<?php }}
						wp_reset_postdata(); ?>					
					</div>
				<?php } ?>

				<?php if (is_category( 4 )) { ?>	
					
					<div class="page__info">
						<h2><?php echo get_cat_name( 4 ); ?></h2>
						<div class="page__info-text"><?php echo category_description( 4 );?></div>
					</div>

					<div class="row justify-content-center">
					<?php $q = new WP_Query('cat=4&posts_per_page=-1');
						if($q->have_posts()) {	while($q->have_posts()){ $q->the_post();
					 		if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
								$thmb = $thumb[0]; }
								else {
								$thmb = 'https://picsum.photos/190/310'; }	?>

						<div class="col-12 col-sm-6 col-lg-5 mb-4">
							<div class="discount">
								<div class="discount__card">
									<div class="discount__info"><?php the_excerpt( 4 );?></div>
									<a class="discount__card-link" href="<?php echo get_permalink(); ?>">
										<div class="discount__card__decoration">Подробнее </div>
									</a>
								</div>
								<div class="discount__name"><?php the_field('akcia-name') ?></div>
								<div class="discount__img"><img src="<?php the_field('akcia-pikt') ?>"></div>
								<div class="discount__desc"><?php the_field('opisanie_akcii'); ?></div>
							</div>
						</div>

						<?php }}
						wp_reset_postdata(); ?>							
					</div>
				<?php } ?>	

				</div>
				<div class="col-12 col-md-3">
					<div class="language-bar">
						<h2><?php echo get_cat_name( 2 ) ?></h2>
						<ul class="language-bar__list">
					<?php $q = new WP_Query('cat=2&posts_per_page=-1'); 
						if($q->have_posts()) {	while($q->have_posts()){ $q->the_post(); 
		 					if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); 
								$thmb = $thumb[0]; } 
							else {
								$thmb = 'https://picsum.photos/190/310'; 
							}	?>

							<li>
								<a class="language-bar__item" href="<?php echo get_permalink(); ?>">
									<div class="language-bar__item__icon">
										<img src="<?php the_field('pict') ?>">
									</div>
									<div class="language-bar__item__text"><?php the_title(); ?></div>
								</a>
							</li>
					<?php }} 
					wp_reset_postdata(); ?>
						</ul>
					</div>
				</div>						
			</div>

			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="question-section">
						<h2>Задай вопрос</h2>

				<?php echo do_shortcode('[contact-form-7 id="16" title="Контактная форма 1"]'); ?>

					</div>
				</div>	
			</div>
		</div>
	</section>

<?php get_footer(); ?>
