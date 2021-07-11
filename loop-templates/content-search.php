<?php
/**
 * Search results partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	

	<header class="entry-header">
		<div class="thumbnail-post">
			<a href="<?php echo $permalink; ?>">
				<div class="cover"> <span>Read More</span>  </div>
				<img src="<?php echo $image_url; ?>" alt="">
			</a>
		</div>
		<?php
		the_title(
			sprintf( '<h2 class="mt-3 mb-3"><a href="%s" rel="bookmark">', esc_url( $permalink ) ),
			'</a></h2>'
		);
		?>



	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<a href="<?php echo $permalink; ?>">
			<?php the_excerpt(); ?>
		</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer d-flex align-items-center justify-content-between mb-3 mt-3">
		<?php if ( 'post' === get_post_type() ) : ?>

				<?php understrap_posted_on(); ?>
<div class="comments"><?php comments_number();?> <div  class="share-btn ml-3 fa fa-share-alt" ></div></div>
		<?php endif; ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->