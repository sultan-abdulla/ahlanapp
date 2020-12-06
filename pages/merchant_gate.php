<?php @session_start();
  $_SESSION['mail_sent'] = 'No';?>


<?php include('../includes/header.php') ?>


 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" type="text/css"/>

 <script src='https://www.google.com/recaptcha/api.js'></script>

<section class="inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-text">
          <h1>Merchant Gate</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="service-provider" id="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12  services">
          <form class="service-form" action="thankyou_cnt.php" method="POST">
            <!--<h3>Kindly fill in and submit the form below</h3>-->
            <div class="row">
              <div class="col-md-6 form-group text-field">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" data-validation="required" data-validation-error-msg="This Filed is required" name="name">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Last Name" data-validation="required" data-validation-error-msg="This Filed is required" name="lname">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group text-field">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email" data-validation="email" name="email">
              </div>
              <div class="col-md-6 form-group text-field">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number" data-validation="required" data-validation-error-msg="This Filed is required" name="phone">
              </div>
            </div>
               <div class="row">
             
              <div class="col-md-12 form-group text-field">
                <label>Business Name</label>
                                <input type="text" class="form-control" placeholder="Select Attachment" data-validation="required" data-validation-error-msg="This Filed is required" name="lname">

              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12 text-field">
                <label>Message</label>
                <textarea type="text" class="form-control" rows="5" placeholder="Type here" data-validation="required" data-validation-error-msg="This Filed is required" name="message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <div class="g-recaptcha" data-sitekey="6Ldd-qoUAAAAAE0_1fLy9OUPF4xg7-FwTBJpNYl-"></div>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
<?php include('../includes/footer.php') ?> 


