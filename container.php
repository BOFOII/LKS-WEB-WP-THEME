<?php get_header(); ?>

<section class="container" id="posts">

  <?php get_template_part( 'content'); ?>

  <div class="sidebar">
    <?php get_template_part( 'categories') ?>
    <?php get_template_part( 'author') ?>
  </div>

</section>

<?php get_footer() ?>