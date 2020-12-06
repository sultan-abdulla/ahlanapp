<?php include('header.php') ?>


<section class="inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-text">
          <h1>Thankyou</h1>
        </div>
      </div>
    </div>
  </section>

  <section id="info">
    <div class="container">
      <div class="row">
         
      <div class="col-md-12">
        <img src="assets/images/confirm.svg" alt="" id="info-ico">
         <h3>Account created</h3>
         <p>Your account has been successfully created. A confirmation has been sent to the provided e-mail addresss. If you have not received its within an hour, please contact our customer service. </p>
         
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


