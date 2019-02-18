<?php




if ( file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
} else {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	
}



add_action('after_setup_theme', 'lecana_theme_support' );
function lecana_theme_support()
{
  //Activer les images à la une
  add_theme_support('post-thumbnails');

  //Activer les posts formats
  add_theme_support( 'post-formats', array('aside', 'gallery', 'action'));

    
    add_theme_support('custom-logo', array(
        'header-text' => array('site-title', 'site-description'),
    ));
} 

// Activer les menus : 2 emplacements de menus
add_action( 'init', 'lecana_register_menus' );
function lecana_register_menus() {

  register_nav_menus( array (
    'header' => __( 'Menu principal' ),
    'footer' => __( 'Pied de page' ),
  ) );

}

// Activation des Widget en pied de page

add_action( 'widgets_init', 'widgets_footer_init' );
function widgets_footer_init() {

	$args = array(
		'id'            => 'sidebar-menu1',
		'name'          => __( 'Information pied de page', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar-menu2',
		'name'          => __( 'Contact pied de page', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar-menu3',
		'name'          => __( 'Crédits pied de page', 'text_domain' ),
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'sidebar-menu4',
		'name'          => __( 'Réseaux Sociaux', 'text_domain' ),
	);
	register_sidebar( $args );
    
}

add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
function enqueue_bootstrap() {

  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
function enqueue_my_scripts() {
    
    if( !is_admin() ) {
        
        // Supprimer la version WORDPRESS
        wp_deregister_script('jquery');
        
        // Déclarer la version 3.3.1 dans wp_footer
        wp_register_script(
         'jquery',
         get_template_directory_uri() . '/js/jquery-3.3.1.min.js',
         array(),
         '3.3.1',
         true);

        wp_enqueue_script('jquery');
        
    }
    
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('Popper'), '1.14.6', true);

    wp_enqueue_script( 'Bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), true);
}

/************** EXTRAITS ARTICLES ***************/
