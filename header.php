<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <a href="#" class="logo"><?php bloginfo('name')?></a>
    <nav class="navbar">
      <?php
      $args = [
        'theme_location' => 'main_menu'
      ];
      wp_nav_menu($args);
      ?>
    </nav>

    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-search" id="search-icon"></i>
    </div>
    <?php get_search_form(  ) ?>

  </header>

  <section class="banner" id="banner">

    <div class="content">
      <h3><?php bloginfo( 'name' )?></h3>
      <p><?php bloginfo( 'description' )?></p>
      <a href="#" class="btn">Visit</a>
    </div>

  </section>