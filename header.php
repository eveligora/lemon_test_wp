<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>

	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__top">
					<div class="header__phone_list">
						<div class="header__phone_icon_w">
							<img src="<?php echo get_template_directory_uri() ?>/app/imgs/svg/phone.svg" alt="Phone" class="header__phone_icon" />
						</div>
						<a href="tel:+380503092527" class="header__phone_link">+38(050) 309 25 27</a>
						<a href="tel:+380678095049" class="header__phone_link">+38(067) 809 50 49</a>
					</div>
					<div class="header__location_w">
						<div class="header__location">
							<div class="header__location_icon_w">
								<img src="<?php echo get_template_directory_uri() ?>/app/imgs/svg/map_point.svg" alt="Location" class="header__location_icon" />
							</div>
							м. Харьків, пр-т Героїв Харкова, 199-а
						</div>
					</div>
				</div>
				<div class="header__bottom">
					<nav class="header_nav">
						<div class="header_logo_w">
							<a href="./" class="header_logo">
								<img src="<?php echo get_template_directory_uri() ?>/app/imgs/svg/logo.svg" alt="Logo" class="header_logo__img" />
							</a>
						</div>
						<div class="header_nav__menu">
							<ul class="header_nav__in">
								<li class="header_nav__item">
									<a href="./" class="header_nav__link">Головна</a>
								</li>
								<li class="header_nav__item">
									<a href="./page2.html" class="header_nav__link">Каталог</a>
									<ul class="header_dropdown header_dropdown--lev_1">
										<li class="header_dropdown__item">
											<a href="#" class="header_dropdown__link">Сухопрессованная плитка</a>
										</li>
										<li class="header_dropdown__item">
											<a href="#" class="header_dropdown__link">Вибролитая<br />
												плитка</a>
											<ul class="header_dropdown header_dropdown--lev_2">
												<li class="header_dropdown__item">
													<a href="#" class="header_dropdown__link">Сухопрессованная плитка</a>
												</li>
												<li class="header_dropdown__item">
													<a href="#" class="header_dropdown__link">Вибролитая<br />
														плитка</a>
												</li>
												<li class="header_dropdown__item">
													<a href="#" class="header_dropdown__link">Дополнительная продукция</a>
												</li>
											</ul>
										</li>
										<li class="header_dropdown__item">
											<a href="./page7.html" class="header_dropdown__link">Дополнительная продукция</a>
										</li>
									</ul>
								</li>
								<li class="header_nav__item">
									<a href="./page3.html" class="header_nav__link">Послуги</a>
								</li>
							</ul>

							<div class="header_logo_w">
								<a href="./" class="header_logo">
									<img src="<?php echo get_template_directory_uri() ?>/app/imgs/svg/logo.svg" alt="Logo" class="header_logo__img" />
								</a>
							</div>
							<ul class="header_nav__in">
								<li class="header_nav__item">
									<a href="./price.html" class="header_nav__link">Прайс</a>
									<ul class="header_dropdown header_dropdown--lev_1">
										<li class="header_dropdown__item">
											<a href="#" class="header_dropdown__link">Плитка тротуарная сухопрессованная
											</a>
										</li>
										<li class="header_dropdown__item">
											<a href="#" class="header_dropdown__link">Плитка тротуарная вибролитая</a>
										</li>
										<li class="header_dropdown__item">
											<a href="#" class="header_dropdown__link">Поребрик сухопрессованный</a>
										</li>
								</li>
								<li class="header_dropdown__item">
									<a href="#" class="header_dropdown__link">Поребрик вибролитой</a>
								</li>
								<li class="header_dropdown__item">
									<a href="#" class="header_dropdown__link">Уcлуги</a>
								</li>
							</ul>
							</li>

							<li class="header_nav__item">
								<a href="./page4.html" class="header_nav__link">Новини</a>
							</li>

							<li class="header_nav__item">
								<a href="./page5.html" class="header_nav__link">Контакти</a>
							</li>
							</ul>
						</div>
						<div class="nav__burger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</nav>
				</div>
			</div>
		</header>