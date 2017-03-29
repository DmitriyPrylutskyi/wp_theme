<?php get_header() ?>

<div class="row">
  <main class="col-md-9">
    <h2>Search</h2>
    <h3 class="content-heading"><?php printf( __('Результаты поиска для: %s', 'default'), get_search_query() ); ?></h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content') ?>
    <?php endwhile; ?>
    <?php else: ?>
      <h3>Нет таких постов</h3>
    <?php endif; ?>

    <?php pagination(); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

 

