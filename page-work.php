<?php
/*
Template Name: Work With Me
 */

get_header(); ?>
<div class='to-the-root book-now' style='background-image: url(<?php echo esc_url(get_home_url()); ?>/wp-content/uploads/2016/04/photo-1441981974669-8f9bc0978b64.jpg);)'>
  <h1><strong>Get To The Root.</strong></h1>
</div>
<div class='to-the-root-main theme-page relative'>
  <h1 class='center'>Schedule a free consult. Feel heard.</h1>
  <div class='speak-box'>
    <h2>Want to speak to someone?</h2>
    <h3>Give me a call or click here!</h3>
    <span class='custom-button'><a href='<?php echo esc_url(get_home_url()); ?>/contact'>Get In Touch &rsaquo;</a></span>
    <h3>1-855-262-3774</h3>
    <h3>I'm happy to answer any questions.</h3>
  </div>
  <div class='root-main-text'>
    <p><em>The case review process is available in-person or by video conferencing.</em></p>
    <h1>Step One: Your Initial Consultation</h1>
    <p>We’ll look at the many of factors influencing your health. The lab tests we order depend on your individual circumstances, and may include:</p>
    <ul>
      <li>Bloodwork: provides an overview & helps us narrow in on problem areas like blood sugar, thyroid, nutrient deficiencies & inflammation to name a few.</li>
      <li>Advanced stool testing screens for parasites, fungal overgrowth, intestinal inflammation, dysbiosis, digestive function and deficiency of beneficial bacteria. Specific markers for liver, gluten sensitivity and breakdown of protein.</li>
      <li>Breath tests check for upper gastrointestinal infections like h. pylori and small intestine bacterial overgrowth.</li>
      <li>Organic acids tests check neurotransmitters, enzymes, and nutrients. Screens for toxic exporsure, bacterial infections & fungal overgrowth. Can be supportive for ruling out oxalate and other sensitivities.</li>
      <li>Comprehensive hormone testing for HPA-axis/adrenal function and sex hormones including hormone metabolism.</li>
    </ul>
    <h2>You will be provided with a health history questionnaires to complete. This is an opportunity to reflect on your goals, history and it makes our time together much more effective. These may include:</h2>
    <ul>
      <li>A detailed health and medical history questionnaire</li>
      <li>An assessment of your chief complaints and symptoms</li>
      <li>A lifestyle and diet survey</li>
      <li>An opportunity to consider your health and wellness goals</li>
    </ul>
    <div class='box-expand step-two'>
      <div class='show-more-container'>
        <span id='expand-step-two' class='show-more'>&times;</span>
      </div>
      <h1>Step Two: Treatment Plan</h1>
      <p>Prior to your 2nd consult, any new labs will be reviewed and used to create a treatment plan. This will include:</p>
      <ul>
        <li>A discussion of the underlying patterns that are contributing to your symptoms.</li>
        <li>An outline of the suggested treatment plan, including dietary, supplement and lifestyle recommendations.</li>
        <li>Recommendations for further testing if necessary.</li>
      </ul>
    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function(event) {
  document.addEventListener('click', function (event) {
    if (event.target.matches('.show-more')) {
      event.target.parentElement.parentElement.classList.add('expand');
      event.target.classList.toggle('show-more');
      event.target.innerHTML = '&bull;';
      setTimeout(() => {
        event.target.classList.toggle('show-less');
      }, 10);
    }

    if (event.target.matches('.show-less')) {
      event.target.parentElement.parentElement.classList.remove('expand');
      event.target.classList.toggle('show-less');
      event.target.innerHTML = '&times;';
      setTimeout(() => {
        event.target.classList.toggle('show-more');
      }, 10);
    }

    }, false);
});
</script>
<?php get_footer(); ?>
