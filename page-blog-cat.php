<?php
/*
Template Name: Blog Category
 */



get_header(); ?>

<div class="theme-page relative">
<div class='blog-cat'>
<div class='blog-cat-main'>
<?php the_content();

$term = get_field('blog_category');
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
<div class='blog-cat-sidebar'>
  <div id="popupmaincontainer">
    <div><img alt="Amber" class="popupimage" src="<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2017/03/Headshot-2017-300x300.jpg" /></div>
    <div>
      <h3><strong>Meet with Amber from anywhere.</strong></h3>
    </div>
    <div id="popuplink"><a href="<?php echo esc_url(get_home_url()); ?>/make-a-booking">Book your free 15 minute consult today!</a></div>
    <div class='insights-titles-container'>
      <h2 class="margin-top">Recent Insights</h2>
      <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class='recent-post-titles'>
        <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>
</div>
</div>
</div>
<div class='contact-footer'>
  <div class='custom-button book-now-inner contact-inner'>
    <a href='<?php echo esc_url(get_home_url()); ?>/contact'>CONTACT &rsaquo;</a>
  </div>
</div>
<?php get_footer(); ?>
