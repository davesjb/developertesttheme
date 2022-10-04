<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

	<title><?php wp_title(''); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header__inner">
			<div class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/tmc-logo.png">
			</div>
			<div class="header__navigation">
				<nav>
					<ul>
						<li><a href="#">Menu Item 1</a></li>
						<li><a href="#">Menu Item 2</a></li>
						<li><a href="#">Menu Item 3</a></li>
						<li><a href="#">Menu Item 4</a></li>
					</ul>
				</nav>
				<span class="header__navigation__search">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icon--search.svg">
				</span>
				<div class="header__navigation__contact">
					<a class="btn">Get in touch</a>
				</div>
			</div>
			<div class="header__menu-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/icon--menu.svg">
			</div>
		</div>
	</header>

	<main>