<?php include('header.php') ?>


<section class="inner-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 banner-text">
        <h1>Account</h1>
      </div>
    </div>
  </div>
</section>

<section class="sign-in">
  <div class="container">
    <div class="row">
      <div class="col-md-12 organise">
        <div class="logo">
          <img class="img-fluid" src="assets/images/footer-logo.svg" alt=""> <span>Bookit Business</span>
        </div>
        <form class="sign-form">
          <h2>Login</h2>
          <p>New to Bookit Business? <a href="bookit_for_business.php">Register</a></p>
          <div class="row">
          <div class="col-sm-12 col-md-10 col-lg-8 form-group text-field">
            <label>Email Address</label>
            <input type="text" class="form-control" placeholder="Enter Email Address">
          </div>
          <div class="col-sm-12 col-md-10 col-lg-8 form-group text-field">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter Password">
            <a class="forgot-pass" href="forgot_password.php">Forgot Password?</a>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-8">
            <button type="submit" class="btn">Sign In</button>
            
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php') ?> 
