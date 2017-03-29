<?php get_header() ?>

<div class="row">
  <!-- main and sidebar -->
  <main class="col-md-9">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content') ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
      <h3>Нет таких постов</h3>
    <?php endif; ?>
    
    <?php pagination(); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<!-- /main and sidebar -->
<?php get_footer(); ?>

 

