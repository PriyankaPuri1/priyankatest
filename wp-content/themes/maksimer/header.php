<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
		<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="assets/js/script.js"></script>
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
                <img class="mySlides" src="assets/images/carousel.jpg">
                <img class="mySlides" src="assets/images/carousel.jpg">
                <img class="mySlides"src="assets/images/carousel.jpg">
            </div>
        </header>


        <main role="main" id="main-content" class="main-content-wrap">


            <section>

                <div class="fjellutstyr">
                    <div class="wrapper">
                        <div class="utstyr">
                            <h4>fjellski</h4>
                            <img src="assets/images/fjell.jpg">
                        </div>
                        <div class="utstyr">
                            <h4>toppturski</h4>
                            <img src="assets/images/toppturski2.jpg"></div>
                        <div class="utstyr">
                            <h4>turski</h4>
                            <img src="assets/images/turski.jpg"></div>
                        <div class="utstyr">
                            <h4>skistaver</h4>
                            <img src="assets/images/skistaver2.jpg"></div>
                        <div class="utstyr">
                            <h4>skifeller</h4>
                            <img src="assets/images/ski.jpg"></div>
                    </div>

                </div>

                <div class="row-fluid"><!--twocolumns-->

                    <div class="col-md-1" >

                        <img class="nyhet" src="assets/images/nyhet.jpg">
                        <img class="circle" src="assets/images/stål.jpg">
                        <p class="white">Breidablikk jaktski m/fellelås</p>
                        <p class="blue">Allsidig jaktski uten stålkant</p>
                        <p class="white1">  <img class="felle" src="assets/images/mark.jpg">
                            fellelås
                            <img class="felle" src="assets/images/mark.jpg">smørbar/sintret
                        </p> <br>
                        <img class="les" src="assets/images/lesmer.jpg">

                    </div>  <!--bluetext end-->
                    <div class="col-md-2">
                        <img class="ski" src="assets/images/skiutstyr.jpg">
                    </div>
                </div>
                </div><!--twocolumnsend-->
                <div id="produkt">
                    <div class="wrapper">
                        <div>
                            <h3>PRODUKTER</h3>
                        </div>
                        <div class="sondre">

                            <div class="prod" ><img src="assets/images/first.jpg"> </div>
                            <div class="prod" ><img src="assets/images/andre.jpg"> </div>
                            <div class="prod" ><img src="assets/images/three.jpg"></div>
                            <div class="prod" ><img src="assets/images/forth.jpg"> </div>


                        </div> <!--productsend-->
                    </div>
                </div>
                <div class="snow top">
                    <h5>ultra-marathon på fjellski<br/><br/></h5>
                    <h4>Hardinglaup 2016</h4>
                    <p>Er du robust til nok å takle h</p>
                </div>
                <div id="ambassador">
                    <div class="wrapper">
                        <div class="heading">
                            <h3>AMBASSADØRER</h3>
                        </div>
                        <div class="ambass" style="padding-top:80px;">

                            <div class="ambassadør"> <img src="assets/images/gladguttene.jpg"></div>
                            <div class="ambassadør">  <img src="assets/images/alexander.jpg"></div>
                            <div class="ambassadør"> <img src="assets/images/elise.jpg"></div>
                            <div class="ambassadør"> <img src="assets/images/cecilie.jpg"></div>

                        </div>
                        <hr style="margin:10px 37px 0 65px;">
                    </div>
                </div> <!--ambassadorend-->
                <div id="frontside">
                    <div class="wrapper">
                        <div class="for">
                            Forside
                        </div>
                        <div class="middle">
                            <p>  ski<br>
                            <p class="small">   Fjellski<br>
                                Toppturski<br>
                                Turski<br></p>
                            Skistaver<br>
                            Skifeller</p>
                        </div>
                        <div class="mid">
                            Aktuelt<br>
                            Ambassador<br>
                            Turer<br>
                            Butikker
                        </div>
                        <div class="last">
                            Om åsnes <br>
                            Årblog
                        </div>
                    </div>

                </div> <!--frontsideend-->
                </div>


				<?php
				if ( have_posts() ) {

					while ( have_posts() ) : the_post();
						get_template_part( 'loop', 'single' );
					endwhile;

				} else {

					echo '<h1>' . __( 'No post found', 'maksimer_lang' ) . '</h1>';

				}
				?>

				<?php get_template_part( 'nav', 'post-pag' ); ?>
				<?php get_sidebar(); ?>
            </section>


        </main>