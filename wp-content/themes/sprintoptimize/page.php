<?php get_header(); ?>
<main class="">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
    <!-- Modal Overlay -->
<div class="modal-overlay fixed inset-0 bg-black bg-opacity-50 hidden"></div>

<!-- Modal Box -->
<div class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
  bg-white p-6 rounded-lg shadow-lg w-1/3 hidden">
  <?php echo do_shortcode("[contact-form-7 id='4e025a3' title='Contact form 1']"); ?>
  <button class="closeModal px-4 py-2 bg-red-500 text-white rounded-lg">
    Close
  </button>
</div>
</main>
<footer>
<?php echo do_shortcode("[hfe_template id='261']"); ?>
</footer>
<?php wp_footer(); ?>

  </body>
</html>