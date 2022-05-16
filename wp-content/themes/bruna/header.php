<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link href="http://brunatrovao.com.br/wp-content/themes/bruna/css/bootstrap.min.css?v=<?= rand(10,100) ?>" rel="stylesheet">
		<link rel="stylesheet" href="http://brunatrovao.com.br/wp-content/themes/bruna/css/index.css?v=<?= rand(10,100) ?>">
		<link rel="stylesheet" href="http://brunatrovao.com.br/wp-content/themes/bruna/css/owl.carousel.min.css?v=<?= rand(10,100) ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/mstile-310x310.png" />
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/jquery.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/bootstrap.bundle.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/popper.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/bootstrap.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/owl.carousel.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://brunatrovao.com.br/wp-content/themes/bruna/js/main.js?v=<?= rand(10,100) ?>"></script>
	</head>

	<body <?php body_class(); ?>>
		
		<nav class="d-lg-none" id="navMobile">
			<a href="<?= get_home_url() ?>">
				<img src="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/LOGO-BRUNA.png" onclick="$('html, body').animate({ scrollTop: $('#intro').offset().top }, 'fast');" alt="Update Consultoria">
			</a>
			<div class="toggle-menu" onclick="$('#navMobile').toggleClass('toggle'); $('#menu-mobile').toggleClass('hide');">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</nav>
		<div id="menu-mobile" class="hide d-lg-none">
			<ul>
				<li>
					<a href="#boletos">O método</a>
				</li>
				<li>
					<a href="#eu">Quem sou</a>
				</li>
				<li>
					<a href="#inscricao">Material Gratuito</a>
				</li>
			</ul>
		</div>
		<nav class="d-none d-lg-block menu-desktop">
			<div class="container">
				<a href="<?= get_home_url() ?>">
					<img src="http://brunatrovao.com.br/wp-content/themes/bruna/materiais/LOGO-BRUNA.png" alt="">
				</a>
				<ul>
					<li>
						<a href="#boletos">O método</a>
					</li>
					<li>
						<a href="#eu">Quem sou</a>
					</li>
					<li class="btn-yellow">
						<a href="#inscricao">Material Gratuito</a>
					</li>
				</ul>
			</div>
		</nav>

		<?
