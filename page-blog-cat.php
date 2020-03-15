<?php
/*
Template Name: Blog Category
 */



get_header(); ?>

<div class="theme-page relative">
<div class='blog-cat'>
<div class='blog-cat-main'>
<?php the_content(); ?>
<div class='buffer'></div>
<?php $term = get_field('blog_category');
if( $term ): ?>
<?php query_posts((array(
  'category_name'  => $term->slug,
  'posts_per_page' => -1
)));
					if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class='post-preview-block category'>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>

              <div class='preview-inner blog-cat'>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class='meta'>by <?php the_author(); ?> | <?php the_date(); ?></div>
                <?php the_excerpt(__('(more…)')); ?>
                <a class='blog-cat-read-more' href="<?php the_permalink() ?>">Read more...</a>
              </div>
            </div>

					<?php endwhile; endif; wp_reset_postdata(); ?>
<?php endif;

?>
</div>
<?php get_template_part('content', 'consultToday'); ?>

</div>
<div class='contact-footer'>
  <div class='custom-button book-now-inner contact-inner'>
    <a href='<?php echo esc_url(get_home_url()); ?>/contact'>CONTACT &rsaquo;</a>
  </div>
</div>
<?php get_footer(); ?>
