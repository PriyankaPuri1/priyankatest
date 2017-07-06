<?php
/*
Template Name: About
*/


?>
<!DOCTYPE html>
<html
	<?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function(){}),jQuery(document).on("click",".menu",function(n){jQuery("body").toggleClass("open-nav")});
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/min/script.js"></script>
</head>
<body class="home page-template-default page page-id-2 page-parent logged-in admin-bar wp-custom-logo customize-support open-nav"<?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main-menu-wrapper"><?php _e( 'Skip to navigation', 'maksimer_lang' ); ?></a>
<a class="skip-link screen-reader-text" href="#main-content"><?php _e( 'Skip to content', 'maksimer_lang' ); ?></a>

<header class="header" role="banner">

    <div class="wrapper">

        <div class="logo">
            <a href="#"><img src="<?php echo get_template_directory_uri ();?>/assets/images/logo.jpg"></a>

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

                <li class="menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eng2.jpg">
                </li>

                <li class="menu"> <img src="<?php echo get_template_directory_uri();?>/assets/images/search1.jpg"> </li>
                <div class="menu">
                    <img class="myImage" src="<?php echo get_template_directory_uri ();?>/assets/images/meny1.jpg" alt="menu">
                    <img class="myImage" src="<?php echo get_template_directory_uri ();?>/assets/images/cross.png" alt="menu">
                </div>
            </ul>
            <!--  <div id="myModal" class="modal" style="display:none">
			   <div class="modal-content">
				   <span class="close">&times;</span>-->
            <a href="http://priyankatest.utvikl.es/home/">HOME</a>  <br>
            <a href=" http://priyankatest.utvikl.es/about-us/">About oss</a> <br>
            <a href=" http://priyankatest.utvikl.es/contact/">Contact</a> <br>


    </div>
    </div>
    <!--  <script>
		  var modal = document.getElementById('myModal');
		  var img = document.getElementById('myImage');
		  var span = document.getElementsByClassName("close")[0];
		  img.onclick = function()
		  {
			  modal.style.display = "block";

		  }
		  span.onclick =function()
		  {
				  modal.style.display = "none";
			  }


	  </script>-->


	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'fallback_cb' => false ) ); ?>
    </nav>
    </div>
    </div>
</header>


