		<footer class="footer">

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

            <div class="wrapper">
				<?php echo date( 'Y' ); ?> <a href="http://www.maksimer.no/" target="_blank"><?php __( 'Maksimer', 'maksimer_lang' ); ?></a>
                <hr>
                <div class="address">
                    <h4>ADDRESSE</h4>
                    ACTIVE BRANDS AS<br>
                    AVD. ÅSNES<br>
                    <h5> regimentsvegen 158<br>
                        5700 voss</h5>
                </div>

                <div class="middle">
                    <h4>kontakt</h4>
                    +47 56 51 98 00<br>
                    <h5> post@asnes.com</h5>
                </div>
                <div class="siste">
                    <h4>FØLG OSS PÅ</h4>
                    <img src="<?php echo get_template_directory_uri ();?>/assets/images/facebook.jpg">FACEBOOK<br><br>
                    <img src="<?php echo get_template_directory_uri ();?>/assets/images/insta.jpg">INSTAGRAM

                </div>

            </div>

		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
