<?php get_header(); ?>
<main class="">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<footer>
<?php echo do_shortcode("[hfe_template id='261']"); ?>
</footer>
<?php wp_footer(); ?>

  </body>
</html>