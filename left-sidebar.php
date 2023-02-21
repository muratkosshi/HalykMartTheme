<?php
/**
* The header
* @package new-york-business
* @since 1.0
* Template Name:Форма регистрации
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
	wp_head();

	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

	<meta name="description" content="Доставка продуктов по городу Актобе.Доставляем продукты до двери,всё что вам нужно просто сделать заказ!">
	<meta name="keywords" content="Купить продукты,доставка продуктов,Онлайн гипермаркет,заказать продукты,курьерская доставка продуктов,акции на продукты,товары для дома,молочная продукция,детское питание,купить продукты Актобе,купить детское питание,Kaspi Red,каспи ред,оплата продуктов из дома">




	<div class="">
		<div class="row">
			<div class="col-md-2">
			<a href="/">	<img style="    width: 100%;" src="/wp-content/uploads/2023/01/logo_white.png" alt="">
</a>			</div>
			<div class="col-md-3 text-center" style="    margin-top: 10px;  margin-bottom: 10px;">

			</div>

		</div>
	</div>
	<div class="bg-gray">


		<div class=" ">

			<header class="bg-image">

				<div class="container">

					<div class="row text-center">
						<div class="col-md-6 text-left">
							<h1 class="mt-2"> HALYKMART  </h1>
							<h2>Онлайн гипермаркет в твоем смартфоне!</h2>
							<p>Мы станем Вашими помощниками и сделаем процесс покупки продуктов максимально быстрым и легким</p>
							<h3 class="mobile-size-text">Зарегистрируй свой номер и получи 1000 тг бонусов! </h3>
						</div>
						<div class="col-md-6 text-left">

							<img style="height: 350px;
							object-fit: contain;
							width: 100%;"
							src="/wp-content/uploads/2023/01/kot_s_paketom.png">
						</div>
					</div></div>
				</header>
			</div>


			<div class="container pt-4 section-inform mobile-center">




				<h3 class="text-center font-color" style="color: black;"> HALYKMART - сервис доставки продуктов в г. Актобе с широким ассортиментом свежих продуктов, напитков, бакалеи и сопутствующих товаров!</h3>



				<h2 class="text-center font-color">Почему стоит закупиться у нас?</h2>

				<div class=" icons-list text-center" >
					<div class="row">


						<div class="col-md-3">
							<div class="card">
								<img src="/wp-content/uploads/2023/01/tovar.png" alt="">


								<p>Более 30 000 наименований товаров!</p>


							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<img src="/wp-content/uploads/2023/01/devilery.png" alt="">

								<p>Бесплатная доставка до двери!</p>


							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<img src="/wp-content/uploads/2023/01/terminal.png" alt="">


								<p>Оплачивай картой или наличными после получения заказа!</p>

							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<img src="/wp-content/uploads/2023/01/bonys.png" alt="">

								<p>Собирай бонусы и промокоды!</p>


							</div>
						</div>

					</div>
				</div>
				<div class="mx-auto text-center row">

					<div class="col-md-3"></div>
					<div class="col-md-6 text-left">
						<?php if (is_user_logged_in()): ?>
							<div class="text-center">
								<hr>


								<h2 class="mobile-size-text">Ваш номер уже зарегистрирован!</h2>







								<p class="mobile-size-text">
									Благодарим за регистрацию! На Ваш бонусный счет зачислено 1000 тг. Приятных покупок!
								</p>

								<a href="/" style="    color: #9462ff;
								background: #ff6a00;
								color: white;
								font-size: 24px;
								border-radius: 32px;
								padding: 10px;">
								Перейти на сайт
							</a>
							<hr>
						</div>
					<?php endif; ?>
					<h2 class="text-center font-color" style="    color: #9462ff;
					background: #ff6a00;
					color: white;
					border-radius: 32px;
					padding: 10px;">Зарегистрируй  свой номер и получи <br> 1000 тг бонусов!</h2>
					<?php echo do_shortcode( '[df-form-signup]' ); ?>
				</div>
				<div class="col-md-3"></div>
			</div>
			<h2 class="text-center">
				Для Вашего удобства у нас подключен Kaspi Red: закажи сейчас, плати потом!
			</h2>
			<img class="red" src="/wp-content/uploads/2023/01/red.png">
		</div>
		<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="    position: fixed;
		bottom: -29px;
		left: 0;
		z-index: 80;"><a id="WhatsApp-button" class="phoneJs"
		href="https://wa.me/+77711256969"   title="Напишите нам!"><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></a></div>

		<a href="https://www.instagram.com/halykmart/" target="_blank" rel="nofollow">
			<span class="phone-button"></span>
		</a>
	</div>
	<style media="screen">
	.wp-bottom-menu{
		display:none!important;
	}
	.phone-call{
		position: fixed; bottom: 75px; right: -27px; z-index: 80;
	}
	#pum-1091018943{
		background:#9462ff;
	}
	#popmake-1091018943{
		background: #ff6a00;
		border-radius: 32px;
	}
	#popmake-1091018943 a{
		color:white;
	}
	#pum-1091018943 button{
		display:none!important;
	}

	#pum_popup_title_1091018943{
		text-align:center;
		color:white;
	}
	.lang-item  {
		display:inline-block;

	}
	.lang-item   a{

		background: #ff6a00;
		cursor: pointer;
		border-radius: 32px;
		padding: 8px;

		color:white;

	}




	.widget{
		padding:0px!important;
	}
	.cbh-phone {
		position: fixed;
		right: 10px;
		bottom: 10px;
		visibility: hidden;
		background-color: transparent;
		width: 200px;
		height: 200px;
		cursor: pointer;
		z-index: 99;
		-webkit-backface-visibility: hidden;
		-webkit-transform: translateZ(0);
		-webkit-transition: visibility .5s;
		-moz-transition: visibility .5s;
		-o-transition: visibility .5s;
		transition: visibility .5s;
	}



	/*	.cbh-phone {
	position: fixed;
	right: 10px;
	bottom: 10px;
	visibility: hidden;
	background-color: transparent;
	width: 200px;
	height: 200px;
	cursor: pointer;
	z-index: 99;
	-webkit-backface-visibility: hidden;
	-webkit-transform: translateZ(0);
	-webkit-transition: visibility .5s;
	-moz-transition: visibility .5s;
	-o-transition: visibility .5s;
	transition: visibility .5s;
	} */
	ul{
		padding: 0;
		margin: 0;
	}
	#kmacb {
		position: fixed;
		display: none;
		background-color: transparent;
		width: 160px;
		height: 160px;
		z-index: 200000!important;
		-webkit-backface-visibility: hidden;
		-webkit-transform: translateZ(0);
		-webkit-transition: visibility .5s;
		-moz-transition: visibility .5s;
		-o-transition: visibility .5s;
		transition: visibility .5s;
		right: 15px;
		bottom: 15px;
	}

	.cbh-phone{position:fixed;      right: -50px;
		bottom: -55px; visibility:hidden;background-color:transparent;width:200px;height:200px;cursor:pointer;z-index:99;-webkit-backface-visibility:hidden;-webkit-transform:translateZ(0);-webkit-transition:visibility .5s;-moz-transition:visibility .5s;-o-transition:visibility .5s;transition:visibility .5s}
		.cbh-phone.cbh-show{visibility:visible}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}@-webkit-keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@-webkit-keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}
		.cbh-phone.cbh-static1{opacity:.6}
		.cbh-phone.cbh-hover1{opacity:1}
		.cbh-ph-circle{width:110px;height:110px;top:40px;left:40px;position:absolute;background-color:transparent;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid rgba(30,30,30,.4);opacity:.1;-webkit-animation:cbh-circle-anim 1.2s infinite ease-in-out;-moz-animation:cbh-circle-anim 1.2s infinite ease-in-out;-ms-animation:cbh-circle-anim 1.2s infinite ease-in-out;-o-animation:cbh-circle-anim 1.2s infinite ease-in-out;animation:cbh-circle-anim 1.2s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}
		.cbh-phone.cbh-active .cbh-ph-circle1{-webkit-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-o-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;animation:cbh-circle-anim 1.1s infinite ease-in-out!important}
		.cbh-phone.cbh-static .cbh-ph-circle{-webkit-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-o-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;animation:cbh-circle-anim 2.2s infinite ease-in-out!important}
		.cbh-phone.cbh-hover .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}
		.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}
		.cbh-phone.cbh-green .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}
		.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle{border-color:rgba(204,204,204,1);opacity:.5}
		.cbh-phone.cbh-gray .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}
		.cbh-ph-circle-fill{width:74px;height:74px;top:58px;left:58px;position:absolute;background-color:#000;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.1;-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}
		.cbh-phone.cbh-active .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important}
		.cbh-phone.cbh-static .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;opacity:0!important}         .cbh-phone.cbh-hover .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}
		.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:.75!important}
		.cbh-phone.cbh-green .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}
		.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle-fill{background-color:rgba(204,204,204,.5);opacity:.75!important}
		.cbh-phone.cbh-gray .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:1!important}
		.cbh-ph-img-circle1{width:50px;height:50px;top:70px;left:70px;position:absolute;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==);background-size: 40px 40px;background-color:rgba(30,30,30,.1);background-position:center center;background-repeat:no-repeat;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:1;-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out;animation:cbh-circle-img-anim 1s infinite ease-in-out}
		.cbh-phone.cbh-active .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;animation:cbh-circle-img-anim 1s infinite ease-in-out!important}
		.cbh-phone.cbh-static .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;animation:cbh-circle-img-anim 0s infinite ease-in-out!important}
		.cbh-phone.cbh-hover .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}
		.cbh-phone.cbh-green.cbh-hover .cbh-ph-img-circle1:hover{background-color:rgba(117,235,80,1)}
		.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}
		.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}
		.cbh-phone.cbh-gray.cbh-hover .cbh-ph-img-circle1{background-color:rgba(204,204,204,1)}
		.cbh-phone.cbh-gray .cbh-ph-img-circle1{background-color:rgba(117,235,80,1)}@-moz-keyframes cbh-circle-anim{0%{-moz-transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1;-moz-opacity:.1;-webkit-opacity:.1;-o-opacity:.1}30%{-moz-transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5;-moz-opacity:.5;-webkit-opacity:.5;-o-opacity:.5}100%{-moz-transform:rotate(0deg) scale(1) skew(1deg);opacity:.6;-moz-opacity:.6;-webkit-opacity:.6;-o-opacity:.1}}@-webkit-keyframes cbh-circle-anim{0%{-webkit-transform:rotate(0deg) scale(0.5) skew(1deg);-webkit-opacity:.1}30%{-webkit-transform:rotate(0deg) scale(.7) skew(1deg);-webkit-opacity:.5}100%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);-webkit-opacity:.1}}@-o-keyframes cbh-circle-anim{0%{-o-transform:rotate(0deg) kscale(0.5) skew(1deg);-o-opacity:.1}30%{-o-transform:rotate(0deg) scale(.7) skew(1deg);-o-opacity:.5}100%{-o-transform:rotate(0deg) scale(1) skew(1deg);-o-opacity:.1}}@keyframes cbh-circle-anim{0%{transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1}30%{transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.1}}@-moz-keyframes cbh-circle-fill-anim{0%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-moz-transform:rotate(0deg) -moz-scale(1) skew(1deg);opacity:.2}100%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-webkit-keyframes cbh-circle-fill-anim{0%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-o-keyframes cbh-circle-fill-anim{0%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-o-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-fill-anim{0%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{transform:rotate(0deg) scale(1) skew(1deg)}}@-moz-keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-moz-transform:rotate(0deg) scale(1) skew(1deg)}}@-webkit-keyframes cbh-circle-img-anim{0%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}}@-o-keyframes cbh-circle-img-anim{0%{-o-transform:rotate(0deg) scale(1) skew(1deg)}10%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-o-transform:rotate(25deg) scale(1) skew(1deg)}30%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-o-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-o-transform:rotate(0deg) scale(1) skew(1deg)}}
		.cbh-ph-img-circle1 {}
			.cbh-phone.cbh-green .cbh-ph-circle {border-color: rgb(0, 242, 164)}
			.cbh-phone.cbh-green .cbh-ph-circle-fill {background-color: rgb(0, 242, 164);}
			.cbh-phone.cbh-green .cbh-ph-img-circle1 {background-color:rgb(0, 242, 164);}

			.kmacb__manager-border {
				position: absolute;
				width: 75px;
				height: 75px;
				top: 50%;
				left: 50%;
				margin-top: -39.5px;
				margin-left: -39.5px;
				border-radius: 100%;
				border: 2px solid #ffe787;
				-webkit-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
				-moz-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
				-ms-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
				-o-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
				animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
				opacity: .8;
				transform-origin: center;
			}
			.kmacb__manager-fill {
				background: #52aff7 center bottom no-repeat;
				position: absolute;
				width: 75px;
				height: 75px;
				top: 50%;
				left: 50%;
				margin-top: -37.5px;
				margin-left: -37.5px;
				border-radius: 100%;
				opacity: .5;
				-webkit-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
				-moz-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
				-ms-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
				-o-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
				animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
				transform-origin: center;
			}
			.kmacb__manager-circle {
				background: #52aff7;
				position: absolute;
				width: 120px;
				height: 120px;
				top: 50%;
				left: 50%;
				margin-top: -60px;
				margin-left: -60px;
				border-radius: 100%;
			}
			.phone-button {
				position: fixed;
				right: 20px;
				bottom: 20px;
				transform: translate(-50%, -50%);
				border-radius: 50%;
				width: 60px;
				height: 60px;
				z-index: 9999;
				background-color: #9462ff;
				background-image: url(/wp-content/uploads/2023/01/iconfinder-social-media-applications-3instagram-4102579_113804.png);
				background-size: 50%;
				background-repeat: no-repeat;
				background-position: 50% 50%;
			}
			.phone-button:before,
			.phone-button:after {
				content: " ";
				display: block;
				position: absolute;
				border: 50%;
				border: 1px solid #9462ff;
				left: -20px;
				right: -20px;
				top: -20px;
				bottom: -20px;
				border-radius: 50%;
				animation: border-animate 1.5s linear infinite;
				opacity: 0;
			}
			.phone-button:after{
				animation-delay: .5s;
			}
			@keyframes border-animate
			{
				0% {
					transform: scale(0.5);
					opacity: 0;
				}
				50% {
					opacity: 1;
				}
				100% {
					transform: scale(1.2);
					opacity: 0;
				}
			}
			body{
				background: #9462ff;
				margin:1% 2% 2% 2%;
				font-family: 'Balsamiq Sans', cursive!important;
				overflow-x:none;


			}
			p,h2,h3,h1{
				font-family: 'Balsamiq Sans', cursive!important;
			}
			.bg-gray{
				background:#f7f7f7;
				border-radius:32px;
			}
			.header-line{


			}
			input{
				background:white!important;
			}

			.bg-image{

				min-height:400px;
				background:#ff6a00;
				border-radius:32px;

				color:white;
				justify-content: center;
				align-items: center;
				display: flex;
				text-align: center;

			}
			.bg-image h2,h3,h1{
				color:white;

			}
		}
		.section-inform h2,h3{
			color:#222!important;
		}
		.header-inform{
			margin: 5% 0 0 0;
		}
		.card{
			/*   box-shadow: 0 0 10px rgba(0,0,0,0.5);  */
			/*   padding: 10px 0 10px 0; */
			margin: 10px 0 10px 0;
			/* 	box-shadow: 2px 2px 2px 1px rgba(148 98 255); */
			border: solid 1px #9462ff;
			border-bottom:none;
			border-radius:32px;

		}

		.registerbutton{
			width: 100%!important;
			background: #9462ff!important;
			margin-bottom:25px;
		}
		.icons-list img{
			width: 100%;
			object-fit: contain;
		}
		.card img{
			width:100%;
			height:220px;
		}
		.card p{
			height:70px;
			display: flex;
			align-items: center;
			justify-content: center;
			background:#9462ff;
			color:white;
			padding:5px;
			border-bottom-left-radius:32px;
			border-bottom-right-radius:32px;
			margin-bottom:0;
			padding:0;
		}
		.red{
			width:100%;
			border-radius:32px;
			margin-bottom:25px;
		}
		.backtoLogin{    display: none!important;}
		.footer-bg{
			background-image: url(https://adonius.club/uploads/posts/2022-02/thumbs/1644506324_26-adonius-club-p-produkti-na-belom-fone-44.png);
			background-repeat: no-repeat;
			background-position: bottom;

		}

		@media(max-width:576px){
			h3,h2{
				font-size:16px!important;
			}
			body{
				margin:1% 2% 10% 2%;
			}
			.mobile-size-text{
				font-size:22px;
			}
			h2.mobile-size-text{
				font-size:22px!important;
			}

			#polylang-2{
				margin-bottom:25px;
			}
			/* 			.phone-call{
			position: fixed; bottom: 75px; left: 0px; z-index: 80;
			} */
		}

		</style>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(92194424, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/92194424" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php
	wp_footer();
