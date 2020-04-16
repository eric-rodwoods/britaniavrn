<?php get_header(); ?>
<?php if (have_posts()) { while (have_posts()) { the_post();

if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); 
			$thmb = $thumb[0]; } 
			else {
			$thmb = 'https://picsum.photos/190/310'; }	?>
			
	<section class="page-content">
		<div class="container-fluid mb-3 mt-3">

			<div class="row justify-content-center">
				<div class="top-image" style="background-image: url(<?php echo $thmb; ?>)">
					<h1 class="single-title"><?php the_title(); ?></h1>
				</div>				
			</div>

			<div class="row justify-content-between mb-3 mb-sm-5">
				<div class="col-12 col-md-9">
					<div class="main-info">						
						<div class="main-info__text"><?php echo wpautop( get_the_content() );?></div>
					</div>					
				</div>
				<div class=" col-12 col-md-3">
					<div class="language-bar">
						<h2><?php echo get_cat_name( 2 ) ?></h2>

						<ul class="language-bar__list">
					<?php $q = new WP_Query('cat=2&posts_per_page=-1'); 
						if($q->have_posts()) {	while($q->have_posts()){ $q->the_post(); 
					 		if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); 
								$thmb = $thumb[0]; } 
								else {
								$thmb = 'https://picsum.photos/190/310'; }	?>

							<li >
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

			<div class="row justify-content-center mt-3 mt-sm-5">

			<?php $images = acf_photo_gallery('picture', $post->ID);
			    if( count($images) ):
			    foreach($images as $image):?>

				<div class= "col-auto mb-3">
				    <div class="thumbnail">
				        <a data-fancybox="gallery" href="<?php echo $image['full_image_url']; ?>">
				            <div style="background-image: url(<?php echo $image['full_image_url']; ?>);"></div>
				        </a>
				    </div>
				</div>
			<?php endforeach; endif; ?>

			</div>

			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
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