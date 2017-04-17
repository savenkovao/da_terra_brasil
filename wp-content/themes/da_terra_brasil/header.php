<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- <title>Da Terra Brasil Foundation</title> -->

 		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width">

		<!-- <link rel="stylesheet" href="src/css/style.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="56x57" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="59x60" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="71x72" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="75x76" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="113x114" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="119x120" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="143x144" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="151x152" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="179x180" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="191x192"	href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/manifest.json">	
		<meta name="msapplication-TileColor" content="#ffffff">	
		<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri()); ?>/src/img/dsg/favicon/ms-icon-144x144.png">	
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>

		<header id="header-menu">
			
			<div class="header-line">
				<div class="wrapper">
					<nav class="header-line-cnt">

						<div id="brgr-menu" data-meta-node class="brgr-menu header-brgr-menu_pos">					
							<div class="brgr-menu__stick header-brgr-menu__stick stick-1"></div>
							<div class="brgr-menu__stick header-brgr-menu__stick stick-2"></div>
							<div class="brgr-menu__stick header-brgr-menu__stick stick-3"></div>
						</div>

						<div class="header-line-nav">

							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'menu_class' => 'header-line-nav__menu',
									'menu_id' => '',
									'depth' => 1
								)); 
							?>

						</div>
					
					
						<div class="header-line-lang">

							<ul>
								<li><a class="header-line-lang__lk br" href="#"></a></li>
								<li><a class="header-line-lang__lk en" href="#"></a></li>
								<li><a class="header-line-lang__lk sp" href="#"></a></li>
							</ul>
						</div>

					</nav>

				</div>
			</div>

			<div class="header-cont">
				<div class="wrapper">
					<nav class="header-cont-cnt">
						<div class="header-cont-logo">							
							<div class="header-cont-logo__img">

								<a href="#"><?php the_custom_logo(); ?></a>		

							</div>							
						</div>
						
						<div class="header-cont-nav">

							<?php 
								wp_nav_menu(array(
									'theme_location' => 'secondary',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'menu_class' => 'header-cont-nav__menu',
									'menu_id' => '',
									'depth' => 3
								)); 
							?>

						</div>

						<div class="header-cont__btn-cnt">
							<button class="header-cont__btn">Donate Now</button>
						</div>

					</nav>
				</div>
			</div>

			<?php	wp_head(); ?>
		</header>