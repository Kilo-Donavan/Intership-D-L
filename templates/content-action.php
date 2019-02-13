<article>
  <header>
    <h2 class="align-center">
        <?php the_title(); ?>
    </h2>
  </header>
<?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail('full');?>
<?php endif; ?>

    <div class="content">
        <?php the_content(); ?>
    </div>
</article>