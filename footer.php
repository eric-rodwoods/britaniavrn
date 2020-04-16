	<footer class="footer">
		<div class="container pt-4 pb-3">
			<div class="row justify-content-between">
				<div class="col-12 col-sm-5">
					<div class="contact__info">
						<div class="footer__subtitle">Контакты</div>
						<div class="contact__info__row">
							<div class="contact__info__icon icon-location"></div>
							<div class="footer__text">
								<?php echo get_field('addr', 2); ?>
							</div>
						</div>
						<div class="contact__info__row">
							<div class="contact__info__icon icon-phone"></div>
							<div class="footer__text">
								<?php echo get_field('mainphone1', 2); ?>
								<br>
								<?php echo get_field('mainphone2', 2); ?>
							</div>
						</div>
						<div class="contact__info__row">
							<div class="contact__info__icon icon-clock"></div>
							<div class="footer__text">
								Понедельник - пятница, с 9-00 до 18-00
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-7">
					<div class="quick__links">
						<div class="footer__subtitle">О нас</div>
						<div class="row">
							<div class="col-6">
								<div class="footer__link footer__text">
									<a href="<?php echo get_home_url(); ?>">Главная</a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_category_link( 2 ); ?>"><?php echo get_cat_name( 2 ) ?></a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_permalink(111); ?>"><?php echo get_the_title(111); ?></a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_permalink(114); ?>"><?php echo get_the_title(114); ?></a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_permalink(119); ?>"><?php echo get_the_title(119); ?></a>
								</div>
							</div>
							<div class="col-6">								
								<div class="footer__link footer__text">
									<a href="<?php echo get_permalink(2); ?>"><?php echo get_the_title(2); ?></a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_category_link( 7 ); ?>">Тарифы</a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_category_link( 4 ); ?>">Акции</a>
								</div>
								<div class="footer__link footer__text">
									<a href="<?php echo get_permalink(128); ?>"><?php echo get_the_title(128); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
