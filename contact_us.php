<!-- ===========================================HEADER>>>START=========================================== -->

<?php include("header.php") ?>



<?php 
/* sending email */


$errors = [];

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $subject = $_POST['subject'];
   $phone = $_POST['phone'];



    $toEmail = "myraekpahel@gmail.com";/* sending email */

    $emailSubject = 'New email from your contant form';
    $headers = ['From' => 'myraekpahel@gmail.com', 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Phone: {$phone}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
        header('Location: contact_us.php');
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }
}

?>

    <section class="_cd_er_aq">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_cd_er_aa">
              <h2>Contact Us</h2>
              <ol>
                <li>Home</li>
                <li>Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- ====================================GET IN TOUCH==================================== -->


    <section id="contact" class="_mn_uy_we">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Get<span>In Touch</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <h3>We’re Listening</h3>
            <h5>In case of any query or doubt, feel free to reach out to us.</h5>

            <div class="container">
    <div class="row">
      
      <div>
        <!-- <ul class="social-network social-circle">
          <!-- <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li> -->
          <!-- <li><a href="https://www.facebook.com/myrajsr" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/MEkpahel" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/myra_ek_pahel/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/company/myra-ekpahel/?viewAsMember=true" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul> --> 
      </div>
    </div>
  </div>

           <!--  <div class="_cd_er_we_zs">
              <ol>
                <li>OUR OFFICE LOCATION
                  <p>Noida UP</p>
                </li>
              </ol>
            </div>

            <div class="_cd_er_we_zs _nd_er_io">
              <ol>
                <li>OUR CONTACT NUMBER
                  <p>+91-7903325536</p>
                </li>
              </ol>
            </div>

            <div class="_cd_er_we_zs _nd_er">
              <ol>
                <li>OUR CONTACT E-MAIL
                  <p>contact@myraekpahel.com</p>
                </li>
              </ol>
            </div> -->
          </div>

		  
<!-- ====================================Interested in discussing?==================================== -->		  
		  
		  
		  
          <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
            <h3 class="_lk_iu_ew">Interested in discussing?</h3>
            <h3 class="_lk_iu_ew">Drop a message here.</h3>
            <form name="contactus" method="post">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="name">Name <small>*</small></label>
                  <input id="name" name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Name" required="" aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="name">Email <small>*</small></label>
                  <input id="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="subject">Subject <small>*</small></label>
                  <input id="subject" name="subject" class="form-control _ge_de_ol" type="text" placeholder="Enter Subject" required="" aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="phone">Phone </label>
                  <input id="phone" name="phone" class="form-control _ge_de_ol" type="text" placeholder="phone number" required="" aria-required="true">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
                </div>
              </div>

              <div class="col-12">
                <div class="btn-02">
                  <!-- <a><span>Submit</span></a> -->
                  <input type="submit" class="btn btn-dark" value="submit">
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="_lo_bn_cs_we">
      <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="450" frameborder="0" allowfullscreen=""></iframe>
    </section> -->


	
<!-- ====================================FOOTER>>>STARTED==================================== -->
    
	
<?php include("footer.php") ?>





<style type="text/css">
  .error{
    color: red;
  }
</style>

<script type="text/javascript">
  $(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='contactus']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      email: {
        required: true,
        email: true
      },
      subject: "required",
     
      message: "required",

      
    },
    // // Specify validation error messages
    // messages: {
    //   name: "Please enter your name",
    //   subject: "Please enter subject",
    //   email: "Please enter a valid email address"

    // },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>