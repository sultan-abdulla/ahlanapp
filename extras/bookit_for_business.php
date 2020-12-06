<?php include('header.php') ?>


<section class="inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-text">
          <h1>Bookit for Business</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="service-provider">
    <div class="container">
      <div class="row">
        <div class="col-md-12 services">
          <h2>Bookit Business Platform</h2>
          <div class="row">
            <div class="col-md-6 col-lg-3 text-center servic-list">
              <div class="images-box">
                <img class="img-fluid" src="assets/images/appoint.png" alt="">
              </div>
              <p>Booking appointments 24/7</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center servic-list">
              <div class="images-box">
                <img class="img-fluid" src="assets/images/client.png" alt="">
              </div>
              <p>Client details at your fingertips</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center servic-list">
              <div class="images-box">
                <img class="img-fluid" src="assets/images/manage.png" alt="">
              </div>
              <p>Managing and modifying schedules</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center servic-list">
              <div class="images-box">
                <img class="img-fluid" src="assets/images/quick.png" alt="">
              </div>
              <p>Quick pay using their mobile phones</p>
            </div>
          </div>

          <h4>Bookit gives you the tools you need to reach out to clients. One simple system to collect payments and keep track of your sales. Fill the form below, provide your company details and start with Bookit Business!</h4>

          <form class="service-form" action="thankyou_reg.php" method="POST">
            <div class="row">
              <div class="col-md-6 form-group text-field">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Smith">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Manager number">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Business Name</label>
                <input type="text" class="form-control" placeholder="Enter Company name">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Business Website</label>
                <input type="text" class="form-control" placeholder="Select Business Type">
              </div>
            <div class="col-md-12 form-group text-field desc-text">
              <label>Full Address</label>
              <input type="text" class="form-control" placeholder="Enter Full Address">
              <!-- <textarea type="text" class="form-control" rows="7" placeholder="Type your address"></textarea> -->
            </div>
          </div>
            <div class="row">
              <div class="col-md-6 form-group text-field">
                <label>Address Latitude</label>
                <input type="text" class="form-control" placeholder="Enter Address Latitude">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Address Longitude</label>
                <input type="text" class="form-control" placeholder="Enter Address Longitude">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Subscription Type</label>
                <select class="selectpicker">
                  <option selected>Select Subscription Type</option>
                  <option>Commission basis</option>
                  <option>1 year subscription </option>
                  <option>Free trial</option>
                </select>
              </div>
              <div class="col-md-6 form-group text-field inline-filed">
                <label class="custom">Offering Home Services?</label>
                  <label class="control control--checkbox">Yes
                  <input type="radio" name="radio"/>
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--checkbox">No
                  <input type="radio" name="radio"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
            </div>

            <div class="form-group text-field social-media">
              <label>Social Media</label>
              <div class="input-group social-link">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fab fa-facebook-square"></i>Facebook.com/</span>
                </div>
                <input type="text" class="form-control">
              </div>
              <div class="input-group social-link">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fab fa-instagram"></i>Instagram.com/</span>
                </div>
                <input type="text" class="form-control">
              </div>
              <div class="input-group social-link">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fab fa-twitter"></i>Twitter.com/</span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-check privacy-chekbox">
                <label class="control control--checkbox">I agree to <a href="terms_and_conditions.php" target="_blank">Terms & Conditions</a> and <a href="privacy_policy.php" target="_blank">Privacy Policy</a>

                <input type="checkbox"/>

                <div class="control__indicator"></div>

              </label>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <?php include('dl_app.php') ?> 


<?php include('footer.php') ?> 


