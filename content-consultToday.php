<div class='blog-cat-sidebar'>
  <div id="popupmaincontainer">
    <div style="display: flex;">
      <img alt="Amber" class="popupimage sidebar-headshot" src="<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2017/03/Headshot-2017-300x300.jpg" />
      <h3 class="sidebar-headline"><strong>Meet with Amber from anywhere.</strong></h3>
    </div>
    <div class='custom-button extra' id="popuplink"><a href="<?php echo esc_url(get_home_url()); ?>/make-a-booking">Book your free 15 minute consult today! &rsaquo;</a></div>
      <div class='insights-titles-container'>
        <h2 class="margin-top">Recent Insights</h2>
        <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class='recent-post-titles'>
          <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <span class='custom-button extra consult'><a href='<?php echo esc_url(get_home_url()); ?>/serotonin-deficiency-syndrome-self-test'>Serotonin Deficiency Syndrome Self-Test &rsaquo;</a></span>
        <div class='reset-cta-box'>
          <span>RESET YOUR HEALTH IN 30 DAYS</span><br/>
          <span class='custom-button join-me'>
          <a href='<?php echo esc_url(get_home_url()); ?>/reset-your-health'>JOIN ME &rsaquo;</a>
          </span>
        </div>
      </div>

    </div>
    <!-- / -->

  </div>
</div> <!-- end sidebar  -->
