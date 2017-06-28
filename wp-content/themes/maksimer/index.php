<?php get_header(); ?>

	<main role="main" id="main-content" class="main-content-wrap">


        <section>

                <div class="fjellutstyr">
                    <div class="wrapper">
                    <div class="utstyr">
                        <h4>fjellski</h4>
                        <img src="../images/fjell.jpg">
                    </div>
                    <div class="utstyr">
                        <h4>toppturski</h4>
                        <img src="../images/toppturski2.jpg"></div>
                    <div class="utstyr">
                        <h4>turski</h4>
                        <img src="../images/turski.jpg"></div>
                    <div class="utstyr">
                        <h4>skistaver</h4>
                        <img src="../images/skistaver2.jpg"></div>
                    <div class="utstyr">
                        <h4>skifeller</h4>
                        <img src="../images/ski.jpg"></div>
                </div>

        </div>

        <div class="row-fluid"><!--twocolumns-->

                <div class="col-md-1" >

                    <img class="nyhet" src="../images/nyhet.jpg">
                    <img class="circle" src="../images/stål.jpg">
                    <p class="white">Breidablikk jaktski m/fellelås</p>
                    <p class="blue">Allsidig jaktski uten stålkant</p>
                    <p class="white1">  <img class="felle" src="../images/mark.jpg">
                        fellelås
                        <img class="felle" src="../images/mark.jpg">smørbar/sintret
                    </p> <br>
                    <img class="les" src="../images/lesmer.jpg">

                </div>  <!--bluetext end-->
                <div class="col-md-2">
                    <img class="ski" src="../images/skiutstyr.jpg">
                </div>
            </div>
        </div><!--twocolumnsend-->
                <div id="produkt">
                    <div class="wrapper">
                        <div>
                            <h3>PRODUKTER</h3>
                        </div>
                        <div class="sondre">

                                <div class="prod" ><img src="../images/first.jpg"> </div>
                                <div class="prod" ><img src="../images/andre.jpg"> </div>
                                <div class="prod" ><img src="../images/three.jpg"></div>
                                <div class="prod" ><img src="../images/forth.jpg"> </div>


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

                                <div class="ambassadør"> <img src="../images/gladguttene.jpg"></div>
                                <div class="ambassadør">  <img src="../images/alexander.jpg"></div>
                                <div class="ambassadør"> <img src="../images/elise.jpg"></div>
                                <div class="ambassadør"> <img src="../images/cecilie.jpg"></div>

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

<?php get_footer(); ?>
