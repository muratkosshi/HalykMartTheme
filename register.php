<?php

/* Template Name: Регистрация */

get_header(); ?>

<?php if (is_user_logged_in ()): ?>
<?php echo do_shortcode('[woocommerce_my_account]') ?>
  <?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
