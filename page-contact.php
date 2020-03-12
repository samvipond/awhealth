<?php
/*
Template Name: Contact
 */
get_header();
?>
<div class="theme-page relative">
		<div class="vc_row wpb_row vc_inner vc_row-fluid">
			<?php
			$sidebar = get_post(get_post_meta(get_the_ID(), "page_sidebar_header", true));
			if(isset($sidebar) && !(int)get_post_meta($sidebar->ID, "hidden", true) && is_active_sidebar($sidebar->post_name)):
			?>
			<div class="page-header-right<?php echo ((int)get_post_meta($sidebar->ID, "hide_on_mobiles", true) ? ' hide-on-mobiles' : ''); ?>">
				<?php
				dynamic_sidebar($sidebar->post_name);
				?>
			</div>
			<?php
			endif;
			?>
	</div>
  <div class="clearfix<?php echo (function_exists("has_blocks") && has_blocks() ? ' has-gutenberg-blocks' : '');?>">
    <div class='contact-container'>
      <div class='side-photo'>
        <img src='<?php echo(get_the_post_thumbnail_url());?>' alt='amber'>
      </div>
      <div class='contact-form'>
        <?php
        if(!function_exists("vc_map") && !has_blocks())
        {
          echo '<div class="vc_row wpb_row vc_row-fluid page-margin-top padding-bottom-70 single-page">';
        }
        if(have_posts()) : while (have_posts()) : the_post();
          the_content();
        if(!function_exists("vc_map") && !has_blocks())
        {
          echo '</div>';
        }
        endwhile; endif;
        ?>
      </div>
    </div>
	</div>
</div>
<?php
get_footer();
?>
