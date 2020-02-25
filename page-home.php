<?php
/*
Template Name: Home Page
 */

get_header(); ?>
<section class="homepage">
<div class="et_pb_with_border et_pb_section et_pb_section_1 banner-bg opt-in-outer et_section_regular">
<h2 class='opt-in-header' style="text-align: center;">Get your Free Resource Guide to Iron Deficiency here</h2>
<div class="et_pb_image_wrap"><img src="<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2020/02/eBook-Cover.png" alt data-lazy-src="<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2020/02/eBook-Cover.png" class=" jetpack-lazy-image"><noscript><img src="'<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2020/02/eBook-Cover.png" alt="" /></noscript></div>
<p><!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
</p><div id="mc_embed_signup" class="mailchimp-inner">
<form action="https://amberwoodhealth.us20.list-manage.com/subscribe/post?u=da9e0e7de0274c40836b7d65b&amp;id=d0c4fc403b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
&nbsp; &nbsp; <p></p>
<div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address &nbsp;<span class="asterisk">*</span><br>
</label><br>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" aria-required="true">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name &nbsp;<span class="asterisk">*</span><br>
</label><br>
<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" aria-required="true">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name </label><br>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
<p> &nbsp; &nbsp;<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><br>
&nbsp; &nbsp; </p>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_da9e0e7de0274c40836b7d65b_d0c4fc403b" tabindex="-1" value=""></div>
<p>&nbsp; &nbsp; </p>
<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
<p>&nbsp; &nbsp; </p>
</div>
</form>
</div>
<p><!--End mc_embed_signup--></p>
<p>

</p>
</div>
</section>
<!-- begin Meet with Amber from Anywhere -->
<div class='cta-button'>
<a class="et_pb_button et_pb_button_0 announcement-cta et_pb_bg_layout_dark" href="<?php echo esc_url(get_home_url()); ?>/amberwoodhealth.ca/make-a-booking">Meet with Amber from anywhere. Book a free 15 min consult now! &rsaquo;</a>
</div>
<!-- end Meet with Amber from Anywhere -->
<!-- begin Recent Insights -->
<h1 class="insights-header">Recent Insights</h1>
<div class='recent-insights'>
<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

  <div class='post-preview-block'>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
    <div class='preview-inner'>
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(__('(more…)')); ?>
      <a class='read-more' href="<?php the_permalink() ?>">Read more...</a>
    </div>

  </div>

<?php endwhile; wp_reset_postdata(); ?>
</div>
<!-- End Recent Insights -->
<div class='more-info'>
<h2>Functional Medicine is Individualized and Patient-Centered.</h2>
<p>Investigate to find the root cause.  Create a long-term preventative plan for optimal health.</p>
<p>Thorough lab work along with the right diet and lifestyle changes means results. </p>
<p>Reach your goals.  Restore your vitality.  Start feeling better today!</p>
<hr>
<h2>Evidence-Based, Natural Medicine.  It Just Makes Sense.</h2>
<p>This is medicine for the 21st century.</p>
</div>
<!-- CountUp -->
<div class='countUp-container'>
<div id='countUp'></div>
</div>
<?php get_footer(); ?>
