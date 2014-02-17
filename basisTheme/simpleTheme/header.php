<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
	<div id="container">
	  <h1><?php bloginfo('name'); ?></h1>
		<header id="nav">
			<?php
			$opties = array( 
				'container_class' => 'menu', 
				'theme_location' => 'hoofdmenu' 
			);
			wp_nav_menu( $opties ); 
			?>
		</header>
