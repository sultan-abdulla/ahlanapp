<?php

  session_start();

    //include("config.php");

#print_r($_SESSION);exit;

  require_once "recaptchalib.php";

  $secret = "6LcvDcUUAAAAAIa92crTnXCd2K8Sk5H_Tx8C_JB1";

  $response = null;

  $reCaptcha = new ReCaptcha($secret);

  $response = $reCaptcha->verifyResponse(

    $_SERVER["REMOTE_ADDR"],

    $_POST["g-recaptcha-response"]

  );



  if ($response == null || !$response->success) {



    ?>



   <?php include('header.php') ?>

 



<section class="inner-banner">

    <div class="container">

      <div class="row">

        <div class="col-md-12 banner-text">

          <h1>Error</h1>

        </div>

      </div>

    </div>

  </section>



  <section id="info">

    <div class="container">

      <div class="row">

         

      <div class="col-md-12">

        <i class="fas fa-times-circle"></i>

        <p>Error, Invalid Google Recaptcha.</p>

       <a onclick="window.history.go(-1); return false;" class="standard-btn">Back</a>

        

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







    <?php

      exit;

  }

   if($_SESSION['mail_sent'] != 'Yes'){

    require_once('classes/class.phpmailer.php');

    $mail = new PHPMailer();

    

    $mail->IsSMTP();

    $mail->SMTPAuth = true;

   # $mail->SMTPDebug = 2;

    $mail->Host = "smtp.sendgrid.net";;

    $mail->Port = 587;

    $mail->SMTPSecure = 'tls';  

    $mail->Username = 'bookit.bh';

    $mail->Password = 'bookit123';



    $name  = $_POST["name"];

    $lname  = $_POST["lname"];

    $email = $_POST["email"];

    $phone = $_POST["phone"];

    $message = $_POST["message"];

    $formdate = date("jS F Y");



      

      $mail_message = "";

      

      /*

      $myfile2 = fopen("HTML/NL/contact_enquiry_customer.html", "r") or die("Unable to open file!");

      $custombody2 = fread($myfile2,filesize("HTML/NL/contact_enquiry_customer.html"));

      fclose($myfile2);

    

      $custombody2 = str_replace("{{Name}}",$name,$custombody2);

      $custombody2 = str_replace("{{Lname}}",$lname,$custombody2);

      $custombody2 = str_replace("{{Email}}",$email,$custombody2);

      $custombody2 = str_replace("{{Phone}}",$phone,$custombody2);

      $custombody2 = str_replace("{{Message}}",nl2br($message),$custombody2);

      $custombody2 = str_replace("{{CDate}}",$formdate,$custombody2);

    */

    

      $custombody2  = "First Name :" . $name."<br>";

      $custombody2 .= "Last Name :" . $lname."<br>";

      $custombody2 .= "Email : " . $email."<br>";

      $custombody2 .= "Phone : " . $phone."<br>";

      $custombody2 .= "Message : " . $message."<br>";

      $custombody2 .= "CDate : " . $formdate."<br>";

      $mail_message = $custombody2;

      

      



      



    #$mail = new PHPMailer();

    // Send mail to customer

      $mail->Subject = "AUTO-REPLY - Your Enquiry to bookit.app";

      $mail->MsgHTML($mail_message);

      $mail->SetFrom('merchant@ahlanapp.com', 'bookit.app');

      $mail->AddAddress($email);

      $mail->Send();



  #####################################

    

    $mail->ClearAddresses();

    $mail->ClearCCs();

    $mail->ClearBCCs();



      //send mail to admin

      

      $adminmessage ="merchant@ahlanapp.com";

      

      /*

      $myfile1 = fopen("HTML/NL/contact_enquiry_admin.html", "r") or die("Unable to open file!");

      $adminbody2 = fread($myfile1,filesize("HTML/NL/contact_enquiry_admin.html"));

      fclose($myfile1);

      $adminbody2 = str_replace("{{Name}}",$name,$adminbody2);

      $adminbody2 = str_replace("{{Lname}}",$lname,$adminbody2);

      $adminbody2 = str_replace("{{Email}}",$email,$adminbody2);

      $adminbody2 = str_replace("{{Phone}}",$phone,$adminbody2);

      $adminbody2 = str_replace("{{Message}}",nl2br($message),$adminbody2);

      $adminbody2 = str_replace("{{CDate}}",$formdate,$adminbody2);

      */

      

      $adminbody2  = "First Name :" . $name."<br>";

      $adminbody2 .= "Last Name :" . $lname."<br>";

      $adminbody2 .= "Email : " . $email."<br>";

      $adminbody2 .= "Phone : " . $phone."<br>";

      $adminbody2 .= "Message : " . $message."<br>";

      $adminbody2 .= "CDate : " . $formdate."<br>";

      

      

      $adminmessage = $adminbody2; 

    

    //Send mail to admin

    

    $mail->Subject = "$name has sent enquiry";

    $mail->MsgHTML($adminmessage);

    $mail->SetFrom('merchant@ahlanapp.com', $name);

    $mail->AddAddress('merchant@ahlanapp.com');

    #$mail->AddBCC("info@info.app");

    $mail->Send();



    $_SESSION['mail_sent'] = 'Yes';

  }

     

?>



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

         <h3>Thank you for contacting us!</h3>

         <p>We appreciate your request. We will contact you as soon as possible </p>

         

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