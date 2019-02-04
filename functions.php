<?php

    // Activer les menus : 2 emplacements de menus
add_action( 'init', 'fg_register_menus' );
function fg_register_menus() {

  register_nav_menus( array (
    'header' => __( 'Menu principal' ),
    'footer' => __( 'Pied de page' ),
    'bouton' => __( 'Boutons de la page d\'accueil' ),
  ) );

}