<!-- ====================================FOOTER>>>STARTED==================================== -->

    <footer class="_vc_zs_qw">
          <h2 style="    font-size: 20px;
    color: #fff;
    padding: 0 0 10px 0;
    position: relative;text-align: center;">We’re Listening<h2>
      <p style="font-size: 20px;
    color: #fff;
    padding: 0 0 10px 0;
    position: relative;text-align: center;">To know more about us, to share about yourself and for anything else under the Sun, don’t think twice. Reach out to us.</p>

      <div class="container">
    <div class="row">
      <div>
        <ul class="social-network social-circle">
          <!-- <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li> -->
          <li><a href="https://www.facebook.com/myrajsr" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/MEkpahel" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          
          <li><a href="https://www.instagram.com/myra_ek_pahel/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          
          <li><a href="https://www.linkedin.com/company/myra-ekpahel/?viewAsMember=true" class="icoLinkedin" title="fa fa-linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

        
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="_nb_cd_er">
              <h2>Contact us</h2>
              <ul>
                <li><p>Noida UP</p></li>
                <li><p>myraekpahel@gmail.com</p></li>
                <li><p>+91-9999999999</p></li>
              </ul>
            </div>
          </div>
        <div class="col-lg-8 col-md-4 col-sm-6 col-12">
            <div class="_nb_cd_er">
              <h2>Important Links</h2>
              <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <ol>
  		          <li><a href="index.php">Home</a></li>
                  <li><a href="about_us.php">About Us</a></li>
				  <li><a href="badhein.php">Badhein sabke kadam</a></li>
				  <li><a href="neenv.php">NEENV</a></li>
                </ol>
              </div>
			  
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <ol>
			    <li><a href="donate.php">Donate Your Device</a></li>
			    <li><a href="blog.php">Myra Blog</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
				<li><a href="joinus.php">Join us</a></li>
              </ol>
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </footer>

	
<!-- ====================================LAST>>>FOOTER==================================== -->	
	
    <section class="end-footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="_jh_er_xs">
              <p>© 2021 Myra ek-Pahel All Rights Reserved by <a href="#">Myra</a></p>
            </div>
          </div>
		  
          <div class="col-6">
            <div class="_jh_er_xs _cc_ui">
              <p>Terms & Conditions<a href="privacy.php" target="_blank">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

	
<!-- ====================================CSS==================================== -->		
	
    <style type="text/css">
      .counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}
    </style>

<!-- ====================================FOOTER>>>END==================================== -->
	
	
	
<!-- ====================================SCRIPT==================================== -->


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
	<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
    </script>
	<script type="text/javascript" src="./slider/slider.js" />
 

    <script>
      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('.header-wrapper').addClass('og-hf') : $('.header-wrapper').removeClass('og-hf');
        });
      });
    </script>

    <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items:3,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>

    <script>
      $('.owl-carousel').owlCarousel({
           loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:4
              }
          }
})
    </script>

    <script>
      $('.counting').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count');
  
      $({ countNum: $this.text()}).animate({
        countNum: countTo
        },

      {

      duration: 3000,
      easing:'linear',
      step: function() {
      $this.text(Math.floor(this.countNum));
    },
      complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

    });  
  

  });
    </script>
  </body>
</html>