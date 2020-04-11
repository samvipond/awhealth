<?php
get_header();
global $post;
$post = get_post(get_option("woocommerce_shop_page_id"));
setup_postdata($post);
?>
<div class="theme-page relative">
	<div class="vc_row wpb_row vc_row-fluid page-header vertical-align-table full-width">
		<div class="vc_row wpb_row vc_inner vc_row-fluid">
			<div class="page-header-left header-with-search">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<!-- search -->
				<div id="widgetized-area">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>
					<!-- do nothing -->
					<?php endif; ?>
				</div>
				<!-- end search -->
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="vc_row wpb_row vc_row-fluid page-margin-top">
			<?php
			if(is_active_sidebar('sidebar-shop'))
			{
				$sidebar = get_page_by_title("Sidebar Shop", OBJECT, "medicenter_sidebars");
			}
			?>
			<div class="vc_col-sm-<?php echo (is_active_sidebar('sidebar-shop') && isset($sidebar) && !(int)get_post_meta($sidebar->ID, "hidden", true) ? '9' : '12'); ?> wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<?php
					if(have_posts()):
						woocommerce_content();
					endif;
					?>
				</div>
			</div>
			<?php
			if(is_active_sidebar('sidebar-shop'))
			{
				if(isset($sidebar) && !(int)get_post_meta($sidebar->ID, "hidden", true))
				{
					?>
					<div class="vc_col-sm-3 wpb_column vc_column_container<?php echo ((int)get_post_meta($sidebar->ID, "hide_on_mobiles", true) ? ' hide-on-mobiles' : ''); ?>">
						<div class="wpb_wrapper">
							<div class="wpb_widgetised_column wpb_content_element clearfix">
								<div class="wpb_wrapper">
									<?php dynamic_sidebar('sidebar-shop'); ?>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>
<?php
global $post;
$post = get_post(get_option("woocommerce_shop_page_id"));
setup_postdata($post);
get_footer();
?>
