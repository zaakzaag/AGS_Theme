<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

require get_template_directory() . '/inc/comments-helper.php';


function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );

function add_search_form($items, $args) {
    if( $args->theme_location == 'my-custom-menu' ){
    $items .= '
    <li class="searchBar-mobile">
    <form class="" method="get" id="searchform" action="'.esc_url( home_url( '/' ) ).'" role="search">

        <label class="sr-only" for="s">Szukaj</label>

        <div class="input-group">
            <input class="field form-control" id="s" name="s" type="text"
        placeholder="Szukaj" value="">
        </div>
    </form>
    </li>
    <li class="d-inline-flex flex-row align-items-center justify-content-center"> 
        <div class="social-icons-navbar">
            <a class="fa fa-facebook" href="#facebook" ></a>
            <a class="fa fa-linkedin"href="#linkedin" ></a>
            
           <button onclick="searchToggler()" class="fa fa-search search-btn"></button>
        </div>
    </li>
   ';

    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);



if(function_exists('acf_register_block_type')){
	add_action('acf/init', 'register_acf_block_types');
}


function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo '&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;';
        the_category(' &bull; ');
            if (is_single()) {
                echo '&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;'  ;
                the_title();
            }
    } elseif (is_page()) {
        echo '&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;';
        echo the_title();
    } elseif (is_search()) {
        echo '&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;Search Results for... ';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
    }
     
    add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


function register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'loop-templates/blocks/section-first.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),

		)
		);
};

register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'sec-section',
            'title'             => __('Second Section'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'loop-templates/blocks/section-sec.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'sec-section', 'quote' ),

		)
		)
};

register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'products-section',
            'title'             => __('Products Section'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'loop-templates/blocks/section-products.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'products-section', 'quote' ),

		)
		)
};



register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'clients-section',
            'title'             => __('Clients section'),
            'description'       => __('A custom contact section block.'),
            'render_template'   => 'loop-templates/blocks/section-clients.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'clients-section', 'quote' ),

		)
		)
};

register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'contact-section',
            'title'             => __('Contact Section'),
            'description'       => __('A custom contact section block.'),
            'render_template'   => 'loop-templates/blocks/section-contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-section', 'quote' ),

		)
		)
};

register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'about-section-top',
            'title'             => __('Top Section for About'),
            'description'       => __('A custom contact section block.'),
            'render_template'   => 'loop-templates/blocks/section-about-top.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-section-top', 'quote' ),

		)
		)
};
register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'about-section-desc',
            'title'             => __('Description Section for About'),
            'description'       => __('A custom contact section block.'),
            'render_template'   => 'loop-templates/blocks/section-about-desc.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-section-desc', 'quote' ),

		)
		)
};

register_acf_block_types(){
	acf_register_block_type(
		array(
			'name'              => 'address-section',
            'title'             => __('Address Section for Contact Page'),
            'description'       => __('A custom contact section block.'),
            'render_template'   => 'loop-templates/blocks/section-address.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'address-section', 'quote' ),

		)
		)
};