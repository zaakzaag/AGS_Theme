<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image_url=get_the_post_thumbnail_url();
$image='';
if(!empty($image_url)){
	$image='<img src="'.$image_url.'" alt="">';
}

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header ">
		<?php echo $image ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	</header><!-- .entry-header -->



	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer d-flex align-items-center justify-content-between mb-3 mt-3 ">

		<div class="entry-meta">
			<?php understrap_posted_on(); ?>
		</div>
		<div class="comments">
			<?php comments_number();?> 
			<div  class="share-btn ml-3 fa fa-share-alt" >
		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
