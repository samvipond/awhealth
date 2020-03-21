<?php
/*
Template Name: Landing Page
 */

get_header(); ?>
<div class="theme-page landing">
  <?php the_content(); ?>
</div>
<!-- contact info -->
<div class='contact-info'>
  <div class='custom-button book-now-inner contact-inner'>
    <a href='<?php echo esc_url(get_home_url()); ?>/contact'>CONTACT &rsaquo;</a>
  </div>
</div>
<?php get_footer(); ?>
