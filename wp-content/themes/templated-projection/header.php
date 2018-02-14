<!DOCTYPE HTML>

<html <?php language_attributes();?> stye="margin-top: 0px !important">
	<head>
		<title><?php wp_title('|',true ,'right'); ?><?php 	bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<?php
		wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<h3><a href="<?php echo home_url(); ?>" class="logo"><?php echo bloginfo('name');?></a></h3>
					<!-- <nav id="nav">
						<a href="index.php">Home</a>
						<a href="generic.html">Contact Us</a>
						<a href="elements.html">Elements</a>
					</nav> -->
					<div id="menu">
					
					<?php wp_nav_menu(array(
						'theme_location' => 'top-menu',
						'container' => 'nav',
						'container_class' => 'custom-menu-class',
						'menu_id' => 'nav'
					)); ?>
					
					</div>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>