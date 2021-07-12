<?php
/**
 * Template Name: Template - With title
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('stay');
$title = get_the_title();
$first_letter = substr($title, 0, 1);
?>



			<main class="site-main hide-entry-title" id="main">
				<div class="wrapper wrapper-header-titled">
				<div class="row page-header-titled d-flex align-items-center justify-content-center">
						<div class="col-sm-5 col-6  background-letter" ><h1 data-letter="<?php echo $first_letter ?>"><?php echo $title ?></h1></div>
						<div class="col-sm-5 col-6 position-relative">
							<div class="breadcrumb-header d-flex align-items-center justify-content-end"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb(  );
}
?></div>
						</div>
					</div>
				</div>

      
			<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );


				}
				?>


			</main><!-- #main -->


	

<?php
get_footer();
