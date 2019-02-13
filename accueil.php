<?php
/*
Template Name: Modèle pour la page d'accueil
*/

get_header() ;
?>
  <main class="container">
    <header class="home-header">
      
        <?php //the_custom_header_markup() ?>
        <h1><?php bloginfo('name') ?></h1>
        <div class="describe">
            <?php bloginfo('description') ?>
        </div>
        
 
    
    </header>
    
    
    

  </main>
<?php get_footer(); ?>
