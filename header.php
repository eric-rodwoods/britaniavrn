<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oranienbaum&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header">
			<div class="container-fluid">
				<div class="row justify-content-between mt-3 mb-1 pr-2 pl-2">
					<div class="col-10 col-sm-6 col-lg-5">
						<div class="burger-menu d-block d-sm-none">
							<span class="burger-menu__line"></span>
							<span class="burger-menu__line"></span>
							<span class="burger-menu__line"></span>
						</div>
						<div class="hidden-menu close d-sm-none">
							<div class="row">
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_home_url(); ?>">Главная</a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_category_link( 2 ); ?>"><?php echo get_cat_name( 2 ) ?></a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_permalink(111); ?>"><?php echo get_the_title(111); ?></a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_permalink(114); ?>"><?php echo get_the_title(114); ?></a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_permalink(119); ?>"><?php echo get_the_title(119); ?></a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_permalink(2); ?>"><?php echo get_the_title(2); ?></a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_category_link( 7 ); ?>">Тарифы</a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_category_link( 4 ); ?>">Акции</a>
									</div>
								</div>
								<div class="col-12">
									<div class="hidden-menu__text">
										<a href="<?php echo get_permalink(128); ?>"><?php echo get_the_title(128); ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="logo">
							<div class="logo__text">языковой центр</div>
							<div class="logo__img">
								<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/britan.png">
								</a>
								
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="row justify-content-end">
							
							<div class="col-12 d-none d-sm-block">								
								<div class="phone__text">
									<a class="decoration__none phone__text" href="tel:<?php echo get_field('mainphone1', 2); ?>">
										<?php echo get_field('mainphone1', 2); ?>
										<img class="phone__img" src="<?php echo get_template_directory_uri(); ?>/img/icon-flag.png">
									</a>	
								</div>								
							</div>

					<?php if (get_field('phone2', 2)) { //проверка на заполненость поля со 2 телефоном ?>

							<div class="col-12 d-none d-sm-block">								
								<div class="phone__text">
									<a class="decoration__none phone__text" href="tel:<?php echo get_field('mainphone2', 2); ?>">
										<?php echo get_field('mainphone2', 2); ?>									
									</a>	
								</div>
							</div>
					<?php } ?>

						</div>
					</div>
				</div>
				<div class="row pb-1 justify-content-center mobile">
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_home_url(); ?>">Главная</a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_category_link( 2 ); ?>"><?php echo get_cat_name( 2 ) ?></a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_permalink(111); ?>"><?php echo get_the_title(111); ?></a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_permalink(114); ?>"><?php echo get_the_title(114); ?></a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_permalink(119); ?>"><?php echo get_the_title(119); ?></a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_permalink(2); ?>"><?php echo get_the_title(2); ?></a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_category_link( 7 ); ?>">Тарифы</a>		
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_category_link( 4 ); ?>">Акции</a>
						</div>
					</div>
					<div class="col-auto d-none d-sm-block">
						<div class="header__text">
							<a href="<?php echo get_permalink(128); ?>"><?php echo get_the_title(128); ?></a>
						</div>
					</div>
				</div>

		<?php if (!is_front_page()) { ?>

					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
					</div>

		<?php } ?>
			
			</div>
		</div>
	</header>
