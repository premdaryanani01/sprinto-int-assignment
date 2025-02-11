<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- This allows styles and scripts to be enqueued -->
    <link rel="preload" href="/wp-content/uploads/2025/02/rupixen-ILpCscZCeR8-unsplash-scaled-1.webp" as="image" />
    <!-- Tag manager -->
     <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PQ6S9F24');</script>
      <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ6S9F24"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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