<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="section section-footer">
	<div class="wrapper  justify-content-center" id="wrapper-footer">
		<footer class="site-footer" >
			<div class="<?php echo esc_attr( $container ); ?>">

				<div class="row">

					<div class="col-lg logo-column">
						<a href="/" class="footer-logo-link">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ags_logo_black.svg" alt="Logo AGS Systems">
						</a>
					</div>
					<div class="col-lg info-column">
						<h4>AGS SYSTEMS SPÓŁKA Z O.O.</h4>
							<div class="row info">						
								<div class="col-sm-4 col-6 mt-2">
									<b>KRS</b> 0000546352<br/>
									<b>NIP</b> 1132200305<br/>
									<b>REGON</b> 016243546


								</div>
								<div class="col-sm-6 col-6  mt-2">
								ul. al.Jerozolimskie 123A <br/> 
								Atlas Tower, XXVIp.<br/>  
								02-017 Warszawa<br/>
								Tel. +48 (22) 613 81 71

								</div>
							</div>
					</div>
				</div><!-- row end -->
				<div class="row">
					<div class="col social-icons">
						<a href="#facebook" class="fa fa-facebook"></a>
						<a href="#linkedin" class="fa fa-linkedin"></a>
					</div>
				</div>

			</div><!-- container end -->
		</footer>
	</div><!-- wrapper end -->
	<div class=" copyrights">
<h6>Copyright 2020 ©  AGS Systems | All Rights Reserved</h6>
				</div>
</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

