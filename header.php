<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package retro_money_beef
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="description" content="Selling your stuff has never been easier. Retro Money Beef lets you make money from your old stuff.">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'vintage-cash-cow'); ?></a>
        
<div class="wrapper">
  <div class="container-nav pad">

    <div id="logo" class="brand-header menuUp">

      <a href="<?php echo get_home_url(); ?>">
            <img srcset="
            <?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo.png 273w,
            <?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo@2x.png 546w
                "
              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo.png"  class="header-logo" alt="Header logo">
      </a>

    </div>

    
      
      <div id="nav-toggle">
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div id="cross">
          <span></span>
          <span></span>
        </div>
      </div>
    <?php
					wp_nav_menu( array(
						'theme_location'	=> 'header-menu',
						'container'			=> 'nav',
						'container_class'	=> 'nav',
						'container_id'	=> 'nav-menu',
						'menu_class'		=> 'nav-ul',
					));
				?>
</div>