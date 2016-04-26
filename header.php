<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Page Wrapper -->
  <div id="page-wrapper">

    <!-- Top Nav -->
    <header id="header" class="alt">
      <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <nav>
        <a href="#menu"><?php _e( 'Menu', 'solid-state' ); ?></a>
      </nav>
    </header>
    <!-- /Top Nav -->

    <!-- Main Menu -->
    <nav id="menu">
      <div class="inner">
        <h2><?php _e( 'Menu', 'solid-state' ); ?></h2>

        <?php wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'menu' => 'main-menu',
            'container' => false,
            'menu_class' => 'links',
            'menu_id' => 'main-menu',
          ) ); ?>

        <a href="#" class="close"><?php _e( 'Close', 'solid-state' ); ?></a>
      </div>
    </nav>
    <!-- /Main Menu -->

    <!-- Banner -->
    <section id="banner">
      <div class="inner">
        <div class="logo"><span class="icon fa-diamond"></span></div>
        <h2><?php bloginfo( 'name' ); ?></h2>
        <p><?php bloginfo( 'description' ); ?></p>
      </div>
    </section>
    <!-- /Banner -->