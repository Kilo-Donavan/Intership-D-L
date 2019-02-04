<?php

add_action('after_setup_theme', 'fg_theme_support' );
function fg_theme_support()
{
  //Activer les images à la une
  add_theme_support('post-thumbnails');

  //Activer les posts formats
  add_theme_support( 'post-formats', array('aside', 'gallery'));

  // Activer l'image d'en-tête personnalisée
  add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/img/header.jpg',
        'flex-width'    => true,
        'flex-height'   => true,
        'width'         => 1920,
        'height'        => 1281,
    ) );
} 

// Activer les menus : 2 emplacements de menus
add_action( 'init', 'fg_register_menus' );
function fg_register_menus() {

  register_nav_menus( array (
    'header' => __( 'Menu principal' ),
    'footer' => __( 'Pied de page' ),
    'bouton' => __( 'Boutons de la page d\'accueil' ),
  ) );

}