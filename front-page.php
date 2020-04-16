<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header( ); ?>

	<section class="window1">
		<div class="container-fluid mb-lg-5 mb-0">
			<div class="row">
				<div class="swiper-container">
				    <div class="swiper-wrapper">
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/britan-main.png);">
				        		<h1  data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(6); ?>">
				        				Курсы английского языка
				        			</a>					        		
					        	</h1>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/german-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(9); ?>">
				        				Курсы немецкого языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/france-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(17); ?>">
				        				Курсы французского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/italy-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(86); ?>">
				        				Курсы итальянского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/spain-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(19); ?>">
				        				Курсы испанского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/port-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(21); ?>">
				        				Курсы португальского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/czech-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(12); ?>">
				        				Курсы чешского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/poland-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(90); ?>">
				        				Курсы польского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/russian-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(96); ?>">
				        				Курсы русского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>				        
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/arab-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(94); ?>">
				        				Курсы арабского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/turk-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(92); ?>">
				        				Курсы турецкого языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/china-main.png);">
				        		<h2 data-swiper-parallax="-300">
				        			<a class="main-title" href="<?php echo get_permalink(88); ?>">
				        				Курсы китайского языка
				        			</a>				        			
				        		</h2>
				        	</div>
				        </div>     
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="window2">
		<div class="container-fluid mt-lg-5 mt-3 mb-lg-5 mb-0">
			<div class="subtitle">
				<div class="subtitle__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/coron.png">
				</div>
				<div class="subtitle__text">
					<h2><?php echo get_cat_name( 4 ) ?></h2>
				</div>
			</div>
			<div class="row justify-content-center">

<?php $q = new WP_Query('cat=4&posts_per_page=-1');
	if($q->have_posts()) {	while($q->have_posts()){ $q->the_post();
 		if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			$thmb = $thumb[0]; }
			else {
			$thmb = 'https://picsum.photos/190/310'; }	?>

				<div class="col-lg-3 col-md-5 col-sm-6 mb-4">
					<div class="discount">
						<div class="discount__card">
							<div class="discount__info"><?php the_excerpt();?></div>
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
		</div>
	</section>
	<section class="window3">
		<div class="container mt-lg-5 mt-0 mb-lg-5 mb-0">
			<div class="row">
				<div class="col-12">
					<div class="add__info">
						<div>
							<h2>Что предлагает ЧОУ ДО «Британия»?</h2>
							<p>В условиях глобализации экономики границы между государствами становятся все более прозрачными. Поэтому изучение иностранных языков становится насущной необходимостью. ЧОУ ДО «Британия» предлагает к изучению наиболее распространенные в мире языки: английский, немецкий, французский, испанский, китайский, польский и др. Для иностранцев действуют курсы русского языка.							
						</div>
						<p>Чтобы выявить ваш уровень подготовки, мы проводим тестирование, выявляющее степень вашей подготовки. Обучение проводится по пяти уровням: от начального “Starter” до продвинутого “Advanced”.</p>
						<h2>Почему именно мы?</h2>
						<p>Двери языкового центра «Британия» открыты для всех воронежцев. Каждый желающий сможет подобрать для себя оптимальную программу обучения. Ведь ЧОУ ДО «Британия» проводит:</p>
						<ul class="add__info__list">
							<li>набор в течение всего года</li>
							<li>воскресные курсы для занятых людей</li>
							<li>занятия с дошкольниками, начиная с 4-х лет</li>
							<li>занятия индивидуально и в минигруппах</li>
							<li>стажировки и туристические поездки за рубеж вместе с педагогами ЧОУ ДО «Британия»</li>
						</ul>
						<p>Для корпоративных клиентов и лиц, приобретающих долгосрочный абонемент, действуют скидки. Курсы английского языка в Воронеже преподают либо носители языка, либо педагоги, прошедшие продолжительную стажировку за границей.</p>
						<p>Стоимость занятий для всех языковых направлений одинакова. Подробнее о расценках вы можете узнать в разделе «Программы».</p>
						<p>Учиться у нас удобно и выгодно. Выбираете наиболее подходящий график занятий и приобретаете только те знания, которые пригодятся в жизни. У нас не заучивают устаревших конструкций. У нас учатся живому языку на основе современной лексики и востребованной жизнью грамматики.</p>
						<div class="add__info__button">
							<a href="<?php echo get_permalink(119); ?>">Подробнее</a>
						</div>
						<div class="floating__icon">
							<img class="floating__image" src="<?php echo get_template_directory_uri(); ?>/img/inner_background_02.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="window4">
		<div class="container-fluid mt-lg-5 mt-4 mb-lg-5 mb-0">
			<div class="subtitle subtitle__image pb-sm-4 pb-0">
				<div class="subtitle__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/coron.png">
				</div>
				<div class="subtitle__text">
					<h2><?php echo get_cat_name( 2 ) ?></h2>
				</div>
			</div>
			<div class="row justify-content-between mt-4">

<?php $q = new WP_Query('cat=2&posts_per_page=-1');
	$i = 0;
	if($q->have_posts()) {	while($q->have_posts()){ $q->the_post();
		if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			$thmb = $thumb[0]; }
			else {
			$thmb = 'https://picsum.photos/190/310'; }	?>

			<?php if ($i == 6) { ?>
				<div class="col-12 show-more__button">
					<div class="show-more__button__decoration">ПОКАЗАТЬ ВСЕ</div>
				</div>	
			<?php   $cls = 'hide'; }?>

				<div class="col-12 col-sm-6 col-lg-4 mb-4 <?echo $cls;?>">
					<a class="program" href="<?php echo get_permalink(); ?>">
						<div class="english language__sizes" style="background-image: url(<?php echo $thmb; ?>)">
							<div class="language__text"><?php the_title();?></div>
						</div>
					</a>
				</div>
				
<?php $i++; }}
wp_reset_postdata(); ?>

				<div class="col-12 hide-more__button hide">
					<div class="hide-more__button__decoration">CКРЫТЬ</div>
				</div>
			</div>
		</div>
	</section>
	<section class="window5">
		<div class="container-fluid mt-lg-5 mt-4 mb-lg-5 mb-4">
			<div class="row">
				<div class="tariff__window">
					<div class="subtitle">
						<div class="subtitle__image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/whiteCoron.png">
						</div>
						<div class="subtitle__text__white">
							<h2><?php echo get_cat_name( 7 ) ?></h2>
						</div>
					</div>
					<div class="row justify-content-around">


		<?php $q = new WP_Query('cat=7&posts_per_page=-1');
		if($q->have_posts()) {	while($q->have_posts()){ $q->the_post();
	 		if( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
				$thmb = $thumb[0]; }
				else {
				$thmb = 'https://picsum.photos/190/310'; }	?>

						<div class="col-12 col-md-4 mb-4">
							<div class="tariff__info">
								<div class="tariff__info-card-main">
									<div class="tariff__card__info"><?php the_excerpt( 7 );?></div>
									<a class="tariff__card-link" href="<?php echo get_permalink(); ?>">
										<div class="tariff__card__decoration-main">Подробнее </div>
									</a>
								</div>
								<div class="tariff__name"><?php the_field('imja_tarifa') ?></div>
								<div class="tariff__rate"><?php the_field('discount') ?></div>
								<div class="tariff__desc"><?php the_field('tariff-desc') ?></div>
							</div>
						</div>

		<?php }}
		wp_reset_postdata(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="window6">
		<div class="container-fluid">
			<div class="row">
				<div class="window__border">
					<div class="window__border__inner">
						<div class="row justify-content-between">
							<div class="col-12 col-md-5 col-lg-4">
								<div class="contact__us__section">
									<div class="contact__us">Напишите нам</div>
									<div class="find__course">Отправьте нам Вашу заявку</div>
									<div class="find__desc">В сообщении укажите Ваши контакные данные и расскажите немного о себе</div>
								</div>
							</div>
							<div class="col-12 col-md-7">
								<div class="contact__form__section">

		<?php echo do_shortcode('[contact-form-7 id="16" title="Контактная форма 1"]'); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="window7">
		<div class="container-fluid">
			<div class="row">
				<div class="sign__now" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/guard.jpg)">Запишись<br> на занятие сейчас</div>
			</div>
		</div>
	</section>


<?php get_footer( ); ?>
