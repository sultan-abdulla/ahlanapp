<?php include('header.php') ?>

<section class="inner-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 banner-text">
      </div>
    </div>
  </div>
</section>

  <section id="info">
    <div class="container">
      <div class="row">
         
      <div class="col-md-12">
        <img src="assets/images/success.svg" alt="" id="info-ico">
         <h3>Thank you for contacting us!</h3>
         <p>Thanks for contacting us! We will be in touch with you shortly.  </p>
         
         <a href="index.php" class="continue">GO TO HOMEPAGE</a>
       </div>
       
     </div>
    </div>
  </section>


<?php include('footer.php') ?> 


<script>$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#info').offset().top - 60
    }, 'slow');
});</script>


