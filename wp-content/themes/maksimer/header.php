<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
		<?php wp_head(); ?>
        <!--<link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="script.js"></script>-->
	</head>
	<body <?php body_class(); ?>>
		<a class="skip-link screen-reader-text" href="#main-menu-wrapper"><?php _e( 'Skip to navigation', 'maksimer_lang' ); ?></a>
		<a class="skip-link screen-reader-text" href="#main-content"><?php _e( 'Skip to content', 'maksimer_lang' ); ?></a>

		<header class="header" role="banner">

			<div class="wrapper">

				<div class="logo">
                    <a href="#"><img src="images/logo.jpg"></a>

                    <!--	<?php
							if ( has_custom_logo() ) {
								the_custom_logo();
							} else {
								echo '<a href="' . get_home_url() . '">';
									bloginfo( 'name' );
								echo '</a>';
							}
						?>-->
				</div>

				<nav class="main-menu" id="main-menu-wrapper" role="navigation">
                    <ul>
                        <a href="#">  <li class="menu"> <img src="images/eng2.jpg"> </li></a>
                        <a href="#">  <li class="menu"> <img src="images/search1.jpg"> </li></a>
                        <a href="#">  <li class="menu"> <img src="images/meny1.jpg"> </li></a>
                    </ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'fallback_cb' => false ) ); ?>
				</nav>

			</div>
            <div id="slideshow">
                <img class="mySlides" src="../images/carousel.jpg">
                <img class="mySlides" src="../images/carousel.jpg">
                <img class="mySlides"src="../images/carousel.jpg">
            </div>
        </header>
