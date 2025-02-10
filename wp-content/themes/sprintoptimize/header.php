<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- This allows styles and scripts to be enqueued -->
</head>
<body <?php body_class(); ?>>
<?php get_header();?>
<div class="flex flex-row items-center sticky navbarCustom">
  <div class="logoContainer w-1/6 flex items-center">
    <img class="max-w-[65px]" src="/wp-content/themes/sprintoptimize/assets/images/logo_sm.webp" alt="Sprinto Logo">
  </div>
  <div class="navContainer w-5/6 flex justify-end">
    <?php 
    wp_nav_menu([
      'theme_location' => 'primary-menu',
      'container' => false,
    ]);
    ?>
    </div>
  </div>