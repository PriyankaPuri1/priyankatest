<!DOCTYPE html>
<html
    <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
		<?php wp_head(); ?>
       <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/min/script.js"></script>
	</head>
	<body <?php body_class(); ?>>
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
                          <li class="menu">
                          <img id="myImage" src="<?php echo get_template_directory_uri ();?>/assets/images/meny1.jpg" alt="menu">
                          </li>
                           <div id="myModal" class="modal" style="display:none">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <a href="http://priyankatest.utvikl.es/home/">HOME</a>  <br>
                                <a href=" http://priyankatest.utvikl.es/about-us/">About oss</a> <br>
                                <a href=" http://priyankatest.utvikl.es/contact/">Contact</a> <br>


                            </div>
                           </div>
                        <script>
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


                        </script>

                    </ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'fallback_cb' => false ) ); ?>
				</nav>
            </div>
            </div>
        </header>
		<div class="slideshow"><?php
		echo do_shortcode("[metaslider id=45]");
		?>
        </div>
          <!--  <div id="slideshow">
                <img class="mySlides" src="<?php echo get_template_directory_uri ();?>/assets/images/carousel.jpg">
                <img class="mySlides" src="<?php echo get_template_directory_uri ();?>/assets/images/carousel1.jpg">
                <img class="mySlides"src="<?php echo get_template_directory_uri ();?>/assets/images/carousel.jpg">
            </div>-->


       <!-- Created by maksimer on 28.06.2017.*/-->
 <!--<script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
 </script> -->

        <main role="main" id="main-content" class="main-content-wrap">


            <section>

                <div class="fjellutstyr">
                    <div class="wrapper">
                        <div class="utstyr">
                            <h4>fjellski</h4>
                            <img src="<?php echo get_template_directory_uri ();?>/assets/images/fjell.jpg">
                        </div>
                        <div class="utstyr">
                            <h4>toppturski</h4>
                            <img src="<?php echo get_template_directory_uri ();?>/assets/images/toppturski2.jpg"></div>
                        <div class="utstyr">
                            <h4>turski</h4>
                            <img src="<?php echo get_template_directory_uri ();?>/assets/images/turski.jpg"></div>
                        <div class="utstyr">
                            <h4>skistaver</h4>
                            <img src="<?php echo get_template_directory_uri ();?>/assets/images/skistaver2.jpg"></div>
                        <div class="utstyr">
                            <h4>skifeller</h4>
                            <img src="<?php echo get_template_directory_uri ();?>/assets/images/ski.jpg"></div>
                    </div>

                </div>

                <div class="row-fluid"><!--twocolumns-->

                    <div class="col-md-1" >

                        <img class="nyhet" src="<?php echo get_template_directory_uri ();?>/assets/images/nyhet.jpg">
                        <img class="circle" src="<?php echo get_template_directory_uri ();?>/assets/images/stål.jpg">
                        <p class="white">Breidablikk jaktski m/fellelås</p>
                        <p class="blue">Allsidig jaktski uten stålkant</p>
                        <p class="white1">  <img class="felle" src="<?php echo get_template_directory_uri ();?>/assets/images/mark.jpg">
                            fellelås
                            <img class="felle" src="<?php echo get_template_directory_uri ();?>/assets/images/mark.jpg">smørbar/sintret
                        </p> <br>
                        <img class="les" src="<?php echo get_template_directory_uri ();?>/assets/images/lesmer.jpg">

                    </div>  <!--bluetext end-->
                    <div class="col-md-2">
                        <img class="ski" src="<?php echo get_template_directory_uri ();?>/assets/images/skiutstyr.jpg">
                    </div>
                </div>
                </div><!--twocolumnsend-->
                <div id="produkt">
                    <div class="wrapper">
                        <div>
                            <h3>PRODUKTER</h3>
                        </div>
                        <div class="sondre">

                            <div class="prod" ><img src="<?php echo get_template_directory_uri ();?>/assets/images/first.jpg"> </div>
                            <div class="prod" ><img src="<?php echo get_template_directory_uri ();?>/assets/images/andre.jpg"> </div>
                            <div class="prod" ><img src="<?php echo get_template_directory_uri ();?>/assets/images/three.jpg"></div>
                            <div class="prod" ><img src="<?php echo get_template_directory_uri ();?>/assets/images/forth.jpg"> </div>


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

                            <div class="ambassadør"> <img src="<?php echo get_template_directory_uri ();?>/assets/images/gladguttene.jpg"></div>
                            <div class="ambassadør">  <img src="<?php echo get_template_directory_uri ();?>/assets/images/alexander.jpg"></div>
                            <div class="ambassadør"> <img src="<?php echo get_template_directory_uri ();?>/assets/images/elise.jpg"></div>
                            <div class="ambassadør"> <img src="<?php echo get_template_directory_uri ();?>/assets/images/cecilie.jpg"></div>

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