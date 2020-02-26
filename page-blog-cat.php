<?php
/*
Template Name: Blog Category
 */



get_header();

the_content();

$term = get_field('blog_category');
if( $term ): ?>
    <h1>yes</h1>
    <h2><?php echo esc_html( $term->name ); ?></h2>
    <p><?php echo esc_html( $term->description ); ?></p>
    <p><?php echo esc_html( $term->slug ); ?></p>
<?php endif;

?>

<?php get_footer(); ?>
