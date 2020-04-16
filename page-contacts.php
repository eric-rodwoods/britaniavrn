<?php get_header(); ?>

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

    <section class="contacts-window">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="contact-section">
						<h1>Контакты</h1>
						<div class="row no-gutters">
							<div class="col-6">
								<div class="contact-section__item">
									<div class="contact-section__info">
										<div class="contact-section__info__subt">
											<i class="icon-location"></i>
											Адрес:
										</div>										
										<div class="contact-section__info__text">
											<?php the_field('addr') ?>
										</div>

									<?php if (get_field('adres2', 2)) { ?>

										<div class="contact-section__info__text">
											<?php the_field('adres2') ?>
										</div>

									<?php } ?>

									<?php if (get_field('adres3', 2)) { ?>
											
										<div class="contact-section__info__text">
											<?php the_field('adres3') ?>
										</div>

									<?php } ?>

									<?php if (get_field('adres4', 2)) { ?>
											
										<div class="contact-section__info__text">
											<?php the_field('adres4') ?>
										</div>

									<?php } ?>

									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="contact-section__item">
									<div class="contact-section__info">
										<div class="contact-section__info__subt">
											<i class="icon-phone"></i>
											Телефон:
										</div>

                                <?php if (get_field('phone1', 2)) { ?>
									
									<div class="contact-section__info__text">
										<?php the_field('phone1') ?>
									</div>

								<?php } ?>
								<?php if (get_field('phone2', 2)) { ?>
									
									<div class="contact-section__info__text">
										<?php the_field('phone2') ?>
									</div>

								<?php } ?>
								<?php if (get_field('phone3', 2)) { ?>
									
									<div class="contact-section__info__text">
										<?php the_field('phone3') ?>
									</div>

								<?php } ?>
								<?php if (get_field('phone4', 2)) { ?>
									
									<div class="contact-section__info__text">
										<?php the_field('phone4') ?>
									</div>

								<?php } ?>

									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row p-3">
				<div class="col justify-content-center">
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad576b5929343ec15ac2145bfbf20d90162d0e2d707adb37fd063f53eb90c79e9&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-3">	
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
