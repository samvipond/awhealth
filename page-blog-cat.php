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
    <h2><?php echo esc_html( $term->name ); ?></h2>
    <p><?php echo esc_html( $term->description ); ?></p>
<?php query_posts((array(
  'category_name'  => $term->slug,
  'posts_per_page' => -1
)));
					if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class='post-preview-block category'>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
              <div class='preview-inner blog-cat'>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(__('(more…)')); ?>
                <a class='blog-cat-read-more' href="<?php the_permalink() ?>">Read more...</a>
              </div>
            </div>

					<?php endwhile; endif; ?>
<?php endif;

?>
</div>
<div class='blog-cat-sidebar'>
  sidebar@!@
</div>
</div>
</div>
<?php get_footer(); ?>
