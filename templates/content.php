<article>
  <header>
    <h3 class="align-center">
      <a href="<?php the_permalink(); ?>" title="En savoir plus">
        <?php the_title(); ?>
      </a>
    </h3>
  </header>
<?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail('full');?>
<?php endif; ?>

</article>
