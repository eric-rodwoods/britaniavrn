<?php get_header(); ?>

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

	<section class="page-content">
		<div class="container mb-3 mt-3">
			<div class="row">
				<div class="col-12 col-md-9">
					<div class="page__info">
						<h1><?php the_title(); ?></h1>
						<div class="page__info-text"><?php echo wpautop( get_the_content() );?></div>
					</div>
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
			<div class="row pt-3 justify-content-center">
				<div class="col-12 col-md-8">
					<div class="question-section">
						<h2>Задай вопрос</h2>

				<?php echo do_shortcode('[contact-form-7 id="16" title="Контактная форма 1"]'); ?>

					</div>
				</div>	
			</div>
		</div>
	</section>

<?php }}?>

<?php get_footer(); ?>

