<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">
			Komentarze
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>

			<nav class="comment-navigation d-flex align-items-center justify-content-between pb-5" id="comment-nav-above">

				<h1 class="sr-only"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '<i class="fa fa-chevron-left" aria-hidden="true"></i> STARSZE', 'understrap' ) ); ?>
					</div>
				<?php } ?>

				<?php	if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'NOWSZE <i class="fa fa-chevron-right" aria-hidden="true"></i>', 'understrap' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // Check for comment navigation. ?>

	
<ul>
			<?php
			wp_list_comments(
				array(
					'style'      => 'ul',
					'short_ping' => true,
					'max_depth'  => '2',
					'callback' => 'better_comments'
				)
			);
			?>

</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>

			<nav class="comment-navigation d-flex align-items-center justify-content-between pb-5 pt-5" id="comment-nav-below">

				<h1 class="sr-only"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '<i class="fa fa-chevron-left" aria-hidden="true"></i> STARSZE', 'understrap' ) ); ?>
					</div>
				<?php } ?>

				<?php	if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'NOWSZE <i class="fa fa-chevron-right" aria-hidden="true"></i>', 'understrap' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->

		<?php endif; // Check for comment navigation. ?>

	<?php endif; // End of if have_comments(). ?>



</div><!-- #comments -->
