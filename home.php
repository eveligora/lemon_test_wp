<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="main">
	<!-- Velyhora Yevhenii -->

	<!-- Derevianko Stanislav -->
	<!-- Vitalii Afanasiev -->
	<!-- Zhovtobriukh Serhii -->
	<!-- Kovalenko Alina -->
	<!-- Heyko Daniel -->
	<section class="hero swiper">
		<div class="swiper-wrapper">
			<div class="container container--wide bg swiper-slide" style="background-image: url('<?php echo get_field('image')['url']; ?>')">
				<div class="container">
					<article class="hero__content">
						<h1 class="hero__title"><?php the_field('title') ?></h1>
						<p class="hero__description">Iguana - найбільший виробник тротуарної плитки у Харкові. Тільки у нас Ви зможете купити плитку за ціною виробника!</p>
					</article>
				</div>
			</div>
			<div class="container container--wide bg swiper-slide" style="background-image: url('<?php echo get_field('image')['url']; ?>')">
				<div class="container">
					<article class="hero__content swiper-slide">
						<h1 class="hero__title">ТРОТУАРНА ПЛИТКА У КИЄВІ</h1>
						<p class="hero__description">Iguana - найбільший виробник тротуарної плитки у Києві. Тільки у нас Ви зможете купити плитку за ціною виробника!</p>
					</article>
				</div>
			</div>
			<div class="container container--wide bg swiper-slide" style="background-image: image-set(url(<?php echo get_template_directory_uri() ?>/app/imgs/hero/hero@1x.jpg) 1x, url(<?php echo get_template_directory_uri() ?>/app/imgs/hero/hero@2x.jpg) 2x)">
				<div class="container">
					<article class="hero__content swiper-slide">
						<h1 class="hero__title">ТРОТУАРНА ПЛИТКА У ЛЬВОВІ</h1>
						<p class="hero__description">Iguana - найбільший виробник тротуарної плитки у Львові. Тільки у нас Ви зможете купити плитку за ціною виробника!</p>
					</article>
				</div>
			</div>
		</div>
		<button class="swiper-button-prev">
			<img src="<?php echo get_template_directory_uri() ?>/app/imgs/slider/button-arrow.svg" alt="prev-arrow" />
		</button>
		<button class="swiper-button-next">
			<img src="<?php echo get_template_directory_uri() ?>/app/imgs/slider/button-arrow.svg" alt="next-arrow" />
		</button>
		<div class="hero__catalog-link-wrapper">
			<div class="container">
				<a class="btn_green" href="#">Каталог</a>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="advantages_block">
				<div class="advantages__img__w">
					<img src="<?php echo get_template_directory_uri() ?>/app/imgs/road.png" alt="road" />
				</div>
				<div class="advantages__cont">
					<h2 class="advantages__headline">Почему наши клиенты<span></span>выбирают нас?</h2>
					<p class="advantages__descr advantages__descr--color">Тротуарная плитка Iguala производится по технологии полусухого вибропрессования, а также выбивается на оборудовании импортного производства, что является гарантией качества и долговечности.</p>
					<p class="advantages__descr advantages__descr--color__text">Благодаря использованию высококачественного сырья плитка считается по праву одной из лучших в Украине и отличается высокой прочностью, морозостойкостью, долговечностью и экологичностью. Мы очень тщательно подходим к подбору цемента, песка, щебня и красителей.</p>
					<a href="#" class="btn_transp">Прайс-лист</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="top_sales__title_in">
				<h2 class="section__title section__title--left section__title--decor_left">Хіт продажу</h2>
			</div>
			<div class="top_sales__product_wrapper">
				<div class="top_sales__product_wrapper_decor decor">
					<div class="top_sales__product_card product_card__wrapper">
						<div class="top_sales__product_card product_card">
							<div class="product_card__img_wrapper">
								<img class="imgs" src="<?php echo get_template_directory_uri() ?>/app/imgs/product/product1.jpg" alt="" />
							</div>
							<h3 class="product_card__title">Старе місто</h3>
							<div class="product_card__high">Висота: 40 мм</div>
							<figure class="product_card__color_wrapper">
								<figcaption class="product_card__color_title">Колір:</figcaption>
								<ul class="product_card__inner">
									<li class="product_card__availabel_color product_card__availabel_color--red"></li>
									<li class="product_card__availabel_color product_card__availabel_color--brown"></li>
									<li class="product_card__availabel_color product_card__availabel_color--green"></li>
									<li class="product_card__availabel_color product_card__availabel_color--aqua"></li>
									<li class="product_card__availabel_color product_card__availabel_color--black"></li>
								</ul>
							</figure>
							<p class="product_card__price">240 грн <span>за m2</span></p>
							<a class="btn_transp" href="#">Детальніше</a>
						</div>
					</div>
					<div class="top_sales__product_card product_card__wrapper">
						<div class="top_sales__product_card product_card">
							<div class="product_card__img_wrapper">
								<img class="imgs" src="<?php echo get_template_directory_uri() ?>/app/imgs/product/product2.jpg" alt="" />
							</div>
							<h3 class="product_card__title">Креатив</h3>
							<div class="product_card__high">Висота: 50 мм</div>
							<figure class="product_card__color_wrapper">
								<figcaption class="product_card__color_title">Колір:</figcaption>
								<ul class="product_card__inner">
									<li class="product_card__availabel_color"></li>
								</ul>
							</figure>
							<p class="product_card__price">245 грн <span>за m2</span></p>
							<a class="btn_transp" href="#">Детальніше</a>
						</div>
					</div>
					<div class="top_sales__product_card product_card__wrapper">
						<div class="top_sales__product_card product_card">
							<div class="product_card__img_wrapper">
								<img class="imgs" src="<?php echo get_template_directory_uri() ?>/app/imgs/product/product3.jpg" alt="" />
							</div>
							<h3 class="product_card__title">Цегла</h3>
							<div class="product_card__high">Висота: 60 мм</div>
							<figure class="product_card__color_wrapper">
								<figcaption class="product_card__color_title">Колір:</figcaption>
								<ul class="product_card__inner">
									<li class="product_card__availabel_color product_card__availabel_color--red"></li>
									<li class="product_card__availabel_color product_card__availabel_color--brown"></li>
									<li class="product_card__availabel_color product_card__availabel_color--green"></li>
									<li class="product_card__availabel_color product_card__availabel_color--black"></li>
								</ul>
							</figure>
							<p class="product_card__price">270 грн <span>за m2</span></p>
							<a class="btn_transp" href="#">Детальніше</a>
						</div>
					</div>
					<div class="top_sales__product_card product_card__wrapper">
						<div class="top_sales__product_card product_card">
							<div class="product_card__img_wrapper">
								<img class="imgs" src="<?php echo get_template_directory_uri() ?>/app/imgs/product/product4.jpg" alt="" />
							</div>
							<h3 class="product_card__title">Львівській камінь</h3>
							<div class="product_card__high">Висота: 50 мм</div>
							<figure class="product_card__color_wrapper">
								<figcaption class="product_card__color_title">Колір:</figcaption>
								<ul class="product_card__inner">
									<li class="product_card__availabel_color"></li>
								</ul>
							</figure>
							<p class="product_card__price">270 грн <span>за m2</span></p>
							<a class="btn_transp" href="#">Детальніше</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section--bg section--offset">
		<div class="features__container">
			<div class="features__block">
				<div class="feature__item">
					<div class="feature__icon">
						<img src="<?php echo get_template_directory_uri() ?>/app/imgs/feat1.svg" alt="Production Icon" />
					</div>
					<h3>Виробництво</h3>
					<p>Найновіше обладнання міжнародного зразка дозволяє випускати 800 м2 плитки різних кольорів за зміну</p>
				</div>
				<div class="feature__item">
					<div class="feature__icon">
						<img src="<?php echo get_template_directory_uri() ?>/app/imgs/feat2.svg" alt="Quality Icon" />
					</div>
					<h3>Якість</h3>
					<p>Наша плитка виготовлена ​​з високоякісної сировини з інших регіонів</p>
				</div>
				<div class="feature__item">
					<div class="feature__icon">
						<img src="<?php echo get_template_directory_uri() ?>/app/imgs/feat3.svg" alt="Delivery Icon" />
					</div>
					<h3>Доставка</h3>
					<p>Доставка тротуарної плитки по Харкову та області здійснюється технікою, підібраною залежно від кількості плитки</p>
				</div>
				<div class="feature__item">
					<div class="feature__icon">
						<img src="<?php echo get_template_directory_uri() ?>/app/imgs/feat4.svg" alt="Warranty Icon" />
					</div>
					<h3>Гарантія</h3>
					<p>Ми готові надати Вам плитку високої якості та міцності з офіційною гарантією 3 роки</p>
				</div>
			</div>
			<div class="feature__image">
				<img src="<?php echo get_template_directory_uri() ?>/app/imgs/feat_main.png" alt="Pavement Image" />
			</div>
		</div>
	</section>
	<section class="section services">
		<div class="container services__in">
			<div class="services__row services__row--one">
				<div class="section__title section__title--decor_bottom">Наши услуги</div>
			</div>
			<div class="services__row services__row--two">
				<div class="services_slider swiper mySwiper">
					<div class="services_slider__w swiper-wrapper">
						<div class="services_slider__item_w swiper-slide">
							<div class="services_slider__item">
								<div class="services__item_coll services__item_coll--one">
									<div class="services__item_title">УКЛАДКА ПЛИТКИ</div>
								</div>
								<div class="services__item_coll services__item_coll--two">
									<div class="services__img_w">
										<img src="<?php echo get_template_directory_uri() ?>/app/imgs/services/serv_2.svg" alt="" class="services__img" />
									</div>
								</div>
								<div class="services__item_coll services__item_coll--three">
									<div class="services__info">
										<div class="services__info_title">Укладка</div>
										<div class="services__info_descr">Если вы сталкиваетесь с укладкой впервые, самостоятельно, трудно предусмотреть все нюансы, ведь зачастую для начала нужно подготовить почву: если у Вас на участке растут кусты и деревья, от них нужно избавиться, так же необходимо будет снимать верхний слой грунта. Мы поможем Вам предусмотреть все эти сложности!</div>
										<a href="./page4.html" class="btn_green">ПОДРОБНЕЕ</a>
									</div>
								</div>
							</div>
						</div>
						<div class="services_slider__item_w swiper-slide">
							<div class="services_slider__item">
								<div class="services__item_coll services__item_coll--one">
									<div class="services__item_title">Доставка плитки</div>
								</div>
								<div class="services__item_coll services__item_coll--two">
									<div class="services__img_w">
										<img src="<?php echo get_template_directory_uri() ?>/app/imgs/services/serv_1.svg" alt="" class="services__img" />
									</div>
								</div>
								<div class="services__item_coll services__item_coll--three">
									<div class="services__info">
										<div class="services__info_title">Доставка</div>
										<div class="services__info_descr">Перемещение тротуарной плитки с одного места на другое требует аккуратности и надежной техники. Основная задача при грузоперевозке сохранить первоначальный вид материала, не повредив его целостность.Манипулятор - универсальное грузоподъемное устройство.</div>
										<a href="./page5.html" class="btn_green">ПОДРОБНЕЕ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="services_slider__pagination swiper-pagination"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="news" class="section">
		<div class="container">
			<div class="section_title_news">
				<h2 class="section__title section__title--left section__title--decor_left">Свіжі новини</h2>
			</div>

			<div class="news_content">
				<div class="content_img_w">
					<div class="content_img__pic_w">
						<img class="content_img__pic" src="<?php echo get_template_directory_uri() ?>/app/imgs/news_img.png" alt="content" />
					</div>

					<div class="content_img__text">
						<a href="#news" class="img_tite__text">Тротуарна плитка: яка правильна ціна?</a>
						<div class="img_tite__data">17 вересня, 2019</div>
					</div>
				</div>

				<div class="news_items">
					<div class="news_items_w">
						<div class="news_item1">
							<div class="item_data">2019</div>
							<div class="item_content">
								<div class="content_data">16 квітня, 2019</div>
								<a href="#news" class="content_text">Тротуарна плитка – краса під ногами</a>
							</div>
						</div>
						<div class="news_item1">
							<div class="item_data">2019</div>
							<div class="item_content">
								<div class="content_data">8 квітня, 2019</div>
								<a href="#news" class="content_text">Тротуарна плитка Старе місто</a>
							</div>
						</div>
						<div class="news_item1">
							<div class="item_data">2019</div>
							<div class="item_content">
								<div class="content_data">23 березня, 2019</div>
								<a href="#news" class="content_text">Укладання тротуарної плитки під ключ</a>
							</div>
						</div>
						<div class="news_item1">
							<div class="item_data">2019</div>
							<div class="item_content">
								<div class="content_data">7 березня, 2019</div>
								<a href="#news" class="content_text">Геотекстиль - нові можливості у виробництві матеріалу</a>
							</div>
						</div>
					</div>
					<a class="news_btn" href="#news">читати усі статті
						<div class="arrow"></div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section section--offset section--bg">
		<div class="container container--wide_2">
			<div class="contacts">
				<div class="contacts_col">
					<div class="contacts_map">
						<iframe class="contacts_map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2566.0767085718176!2d36.302540178744245!3d49.97241998461914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270a69949ba13f%3A0x262972770824554f!2sHeroiv%20Kharkova%20Ave%2C%20199%D0%B0%2C%20Kharkiv%2C%20Kharkivs&#39;ka%20oblast%2C%2061000!5e0!3m2!1sen!2sua!4v1724782507508!5m2!1sen!2sua" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="contacts_cont">
					<h2 class="section__title section__title--adaptive section__title--decor_adaptive">Будем на связи!</h2>
					<p class="contacts_cont__descr">Если Вы все еще сомневаетесь, закажите <strong>обратный звонок</strong> и мы перезвоним Вам в кратчайший срок!</p>
					<form class="contacts_form" action="">
						<label for="name"><span>*</span> Ваше имя:</label>
						<div class="form__input">
							<input type="text" id="name" placeholder="Введите имя..." class="form__input__text form__input--man">
						</div>
						<label for="phone"><span>*</span> Ваш номер телефона:</label>
						<div class="form__input2">
							<input type="text" id="phone" placeholder="Введите телефон..." class="form__input__text2 form__input--phone">
						</div>
					</form>
					<button class="btn_green" type="submit">Жду звонка!</button>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>