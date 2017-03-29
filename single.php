<?php get_header() ?>

<div class="row">
  <!-- main and sidebar -->
  <main class="col-md-9">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content', 'single') ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php 
     if ( comments_open() || '0' != get_comments_number() ) :
      comments_template();
     endif;
    ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<!-- /main and sidebar -->
<?php get_footer(); ?>
