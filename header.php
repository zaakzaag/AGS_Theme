<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_url'); ?>/js/theme.min.js"></script>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<script>




const scrollFunction=()=> {

	let el =document.getElementById("logo-img");
	let navBarId = document.getElementById("navbar-id");
	
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

	el.style.height="50px"
	navBarId.classList.remove("navbar-transparent");
	el.src="<?php bloginfo('template_url'); ?>/img/ags_logo_black.svg";
;
  } else {

	navBarId.classList.add("navbar-transparent");	
	el.style.height="80px"
	el.src="<?php bloginfo('template_url'); ?>/img/logo_ags.png";
;
  }
}



</script>

<nav class="navbar fixed-top navbar-expand-lg navbar-transparent" id="navbar-id" >
    <div class="container-fluid container-regulation">

		<a class="custom-logo-link" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img id="logo-img" src="<?php bloginfo('template_url'); ?>/img/logo_ags.png" />
		</a>
			
		
		<button class="navbar-toggler navbar-toggler-height" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>

  		<?php
			wp_nav_menu(
				array(
						'theme_location'  => 'my-custom-menu',
						'container_class' => 'collapse navbar-collapse ',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'navbar-nav mr-auto w-100 justify-content-end',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu-id',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
			);
		?>

		<div id="search-form-wrapper" class="social-icons-navbar hidden">
			<ul class="navbar-nav mr-auto w-100 justify-content-end align-items-center" >
				<li>
					<form class="" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

						<label class="sr-only" for="s"><?php esc_html_e( 'Szukaj', 'understrap' ); ?></label>

						<div class="input-group">
							<input class="field form-control" id="s" name="s" type="text"
						placeholder="Szukaj" value="<?php the_search_query(); ?>">
						</div>
					</form>
				</li>
				<li>
					<button onclick="searchToggler()" class="fa fa-times "></button>
				</li>
			</ul>
		</div>

    </div>
  </nav>

  
<script>
	window.onscroll =()=> { scrollFunction();}
</script>