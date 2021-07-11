<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('stay');
$container = get_theme_mod( 'understrap_container_type' );
$title = get_the_title();
$first_letter = substr($title, 0, 1);

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
	'author' => '<div class="row comment-form-row"><div class="col-md-6 col-12 pb-3"><label class="w-100" for="author">' . __( 'Imię i nazwisko' ) . ' ' . ( $req ? '<span class="required">*</span>' : '' ) .
	'<br/><input class="w-100" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></label></div>',
	'email'  => '<div class="col-md-6 col-12 pb-3"><label class="w-100" for="email">' . __( 'Email' ) . ' ' . ( $req ? '<span class="required">*</span>' : '' ) .
	'<br/><input class="w-100" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></label></div></div>',
'cookies' =>''

);

$comment_field = '<div class="row comment-form-row"><div class="col-12  w-100 pb-3"><label class="w-100" for="comment">'._x( 'KOMENTARZ', 'noun' ) .'<br/><textarea class="w-100 " id="comment"  maxlength="65525" aria-required="true" required="required"></textarea></label></div></div>';


$comments_args = array(
    'fields' =>  apply_filters( 'comment_form_default_fields', $fields ),'label_submit'=>__('SEND') ,
	'comment_field' => $comment_field,
	'comment_notes_before' => '',
	'title_reply'=>'Dodaj komentarz'
);

?>


<div class="wrapper wrapper-header-titled">
	<div class="row page-header-titled text-uppercase d-flex align-items-center justify-content-center">
		<div class="col-sm-5 col-6  background-letter" ><h1 data-letter="<?php echo $first_letter ?>"><?php echo $title ?></h1></div>
		<div class="col-sm-5 col-6 position-relative">
			<div class="breadcrumb-header d-flex align-items-center justify-content-end"><?php get_breadcrumb(); ?></div>
		</div>
	</div>
</div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row pt-5">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
			

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #single-wrapper -->
</div>
<?php if ( have_comments() ) : ?>
	<div class="bg-color-comment-form pt-4 pb-4">
		<div class="wrapper pt-4 pb-4">
			<div class="container pt-4 pb-4">	
				<div class="row">
					<div class="col-md">	<?php comment_form($comments_args);; // Render comments form. ?></div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; // End of if have_comments(). ?>
	<section class="section contact-section">
    	<div class="wrapper text-center justify-content-center">
			<div class="title">
				<h2>Chcesz dowiedzieć się więcej?</h2>
				<h3>Napisz do nas</h3>
			</div>
			<div class="row d-flex justify-content-center "> 
				<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</section>



<?php
get_footer();
