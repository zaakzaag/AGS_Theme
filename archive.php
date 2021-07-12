<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('stay');
$title = get_the_archive_title();
$first_letter = substr($title, 0, 1);
?>



			<main class="site-main hide-entry-title" id="main">
				<div class="wrapper wrapper-header-titled">
					<div class="row page-header-titled text-uppercase d-flex align-items-center justify-content-center">
						<div class="col-sm-5 col-6  background-letter" ><h1 data-letter="<?php echo $first_letter ?>"><?php echo $title ?></h1></div>
						<div class="col-sm-5 col-6 position-relative">
							<div class="breadcrumb-header d-flex align-items-center justify-content-end">
							<?php
								if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb(  );
								}?>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-blog pt-4 pb-4">
					<div class="wrapper mw-100 mt-5 mb-5">
						<div class="row d-flex align-items-top justify-content-center">
							<?php
							if ( have_posts() ) {
								// Start the Loop.
								while ( have_posts() ) {
								?>	
									<div class="col-md-5 pb-4"><?php
									the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'loop-templates/content', get_post_format() );?>
										</div>	
									<?php
								}
							} else {
								get_template_part( 'loop-templates/content', 'none' );
							}
							?>
						</div>
						<div class="row d-flex align-items-center justify-content-center pt-3 ">
							<?php understrap_pagination(); ?>
						</div>
					</div>
					
				

				</section>


				<div class="section contact-section">
    				<div class="wrapper text-center justify-content-center">
						<div class="title">
							<h2>Chcesz dowiedzieć się więcej?</h2>
							<h3>Napisz do nas</h3>
						</div>
						<div class="row d-flex justify-content-center "> 
							<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
						</div>
					</div>
				</div>
		
			</main><!-- #main -->
	
<
	

<?php
get_footer();

