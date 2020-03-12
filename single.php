<?php
/*
Template Name: Single post
*/
get_header();
setPostViews(get_the_ID());
?>
<div class='single-post-page'>
<div class="theme-page relative">
	<div class="vc_row wpb_row vc_row-fluid page-header vertical-align-table full-width">
		<div class="vc_row wpb_row vc_inner vc_row-fluid no-border">
			<?php
			/*get page with single post template set*/
			$post_template_page_array = get_pages(array(
				'post_type' => 'page',
				'post_status' => 'publish',
				//'number' => 1,
				'meta_key' => '_wp_page_template',
				'meta_value' => 'single.php'
			));
			?>
		</div>
	</div>
	<div class='foobar'>
		<div class="clearfix single-post-container">
			<h1 class="page-title single-title"><?php the_title(); ?></h1>
			<div class='meta meta-single'>
				<span>by <?php the_author(); ?></span>
				<span> | <?php the_date(); ?> </span>
				<span> <?php
				$postCat = get_the_category( $post->ID );
				if ( ! empty( $postCat ) ) {
						echo(' | ' . esc_html( $postCat[0]->name ));
				} ?>
				</span>
			</div>
			<div class='single-thumb'>
				<?php the_post_thumbnail(); ?>
			</div>
		<?php the_content(); ?>
		<h1>Related Posts</h1>
		<?php

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
        <p class="related-posts">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>

        </p>
<?php }
wp_reset_postdata(); ?>
		</div>
		<?php get_template_part('content', 'consultToday'); ?>
</div>
<?php
get_footer();
?>
