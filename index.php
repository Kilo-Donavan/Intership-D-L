<?php get_header() ; ?>
    
<main class="container">
   
    <?php
        // Si il y a des articles à afficher
        if ( have_posts() ) : ?>
    <section>
      <?php while( have_posts() ) : the_post() ?>
      <?php get_template_part('templates/content', get_post_format() ) ?>
      <?php endwhile; ?>
    </section>
    <?php endif;  ?>
    
</main>

<?php get_footer(); ?>   