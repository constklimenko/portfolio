<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PaintResident
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

	<?php wp_head(); ?>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author="narcomacer@gmail.com">
    <title><?php bloginfo( 'name' ); ?> </title>
</head>

<body >
	
<nav class="nav ">
        <div class="nav__block nav__block--1 scroll"><a href="#about" class="nav__link">О нас</a> </div>
        <div class="nav__block nav__block--2 scroll"><a href="/paint_resident/" class="nav__link">Главная</a> </div>
        <div class="nav__block nav__block--3 scroll"><a href="" class="nav__link">Контакты</a> </div>
</nav>
<div class="phone">
        <span class="m-hide">8(987)0166063</span>

        <a class="m-show" href="tel:+79870166063">8(987)0166063</a>
</div>
<div class="social">
        <a target="__blank" href="https://vk.com/paint_resident" class="social__icon vk"> </a>
        <a target="__blank" href="https://www.instagram.com/den_resident/" class="social__icon insta"> </a>
</div>
<header class="first" id="first">


        <div class="first__bg"></div>


				<h1 class="h1 first__title">
					
				<?php  
				if(has_custom_logo()): ?>
				
				<? the_custom_logo(); ?>
				
				<? else:?>
				
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
					
					<?endif;?>
				</h1>

				<? $paintresident_description = get_bloginfo( 'description', 'display' );
			if ( $paintresident_description || is_customize_preview() ) :
				?>
				<p class="first__mobile-title h2"><?php echo $paintresident_description; 
				else:?>
				<div class="first__mobile-title h2">Покраска автомобиля в&nbsp;Уфе. </div>
				<? endif; ?>


        <div class="first__form contact-form m-hide " id="contact-form_1" data-tema="Хочу рассчёт">
            <h2 class=" title">
                <nowrap> Покраска&nbsp;автомобиля в&nbsp;Уфе</nowrap>
            </h2>
            <div class=" subtitle contact-form__description">Оставьте свой
                <nowrap>номер телефона,
                </nowrap>и мы с вами свяжемся
            </div>

            <input type="text" name="name" placeholder="Имя" class="form__name contact-form__input_name ">
            <input name="tel" type="tel" placeholder="Номер телефона" class="form__phone contact-form__input_tel">
            <button class="button contact-form__button" onclick="SimpleMailer(this);">Записаться</button>



</div>






    </header>


