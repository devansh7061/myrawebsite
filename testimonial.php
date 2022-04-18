
<!-- ===========================================HEADER>>>START=========================================== -->

<?php include("header.php") ?>

<?php
  $testimonialData = [
    "Akshara is a commerce graduate from Lady Shri Ram College for Women (Batch of 2019). She’s worked with an ad-tech firm-InMobi. She co-founded Myra in 2017 when it was just a dream to bring a change in society. 2020 gave a new perspective to the initiative and that led to the birth of different projects like Badhein Sabke Kadam, Neenv and Inclusivity in Indian Education. She feels great to be associated with people who share the same goals and values and are committed to initiating the change",

    "Apurva is a commerce graduate from Lady Shri Ram College for Women (Batch of 2019). She is currently pursuing Chartered Accountancy and working in Direct Taxation and Transfer Pricing with S.S Kothari Mehta & Company, Chartered Accountants, Delhi. She believes in equal growth and holistic development opportunities for all stakeholders in the society and has been actively involved in bringing ground-level change with meaningful execution of goals so set forth with Myra.",

    "Urvi is an energetic and passionate college student whose forte lies in contributing to social work and enhancing lives. She is extremely committed when it comes to solving tasks and her brainstorming skills make her perfect for Myra. She has a strong work ethic, is self-motivated, organized and has a positive attitude and most importantly, has great interpersonal communication skills. She has instilled in herself a desire to give back to the community and has developed a deep dedication to foster a safe environment.",

    "Avleen is a strategy consultant by profession, working with a global management consulting firm, LEK Consulting, with a specialization in the Education sector. Currently, she is the Director of Myra- Ek Pahel, leading the research and execution of a number of initiatives under Myra's umbrella. Her academic qualifications include an undergraduate degree in commerce from the prestigious Lady Shri Ram College for Women, University of Delhi. She is an explorer by nature, who finds her interest in dance, travelling and learning about the development sector and public policy.",

    "Alongside being one of the early members of Myra, Tanu is currently working as the Business Development Associate of an early-age global trade startup.Nexprt Solutions Pvt. Ltd. She has completed her bachelors in Commerce Hons. from Lady Shri Ram College for Women (Class of 2020). At Myra, she takes the responsibility for the content and marketing wing, and works closely on streamlining our digital penetration. She enjoys music and writing, which explains her newfound interest in song writing ",

    "Nishtha is a Business student, pursuing her graduation from ISME Bangalore. With her exceptional networking and communication skills backed by the motive to serve the society, she is currently working as an Associate of Myra, closely heading the research and strategy arm of the Trust. Her co-curricular interests include graphic designing and content writing."
  ]

?>

    <section class="_cd_er_aq">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_cd_er_aa">
              <h2>People of myra</h2>
              <ol>
                <li>Home</li>
                <li>People of myra</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ====================================CONTACT>>>START==================================== -->


    <section id="contact" class="_mn_uy_we">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>People of<span>Myra</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
         <?php  echo ( isset($_REQUEST['index']) && isset($testimonialData[$_REQUEST['index']])) ?  $testimonialData[$_REQUEST['index']] :""?>

         
        </div>
      </div>
    </section>

    <!-- <section class="_lo_bn_cs_we">
      <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="450" frameborder="0" allowfullscreen=""></iframe>
    </section> -->

    <!-- ====================================CONTACT>>>END==================================== -->
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