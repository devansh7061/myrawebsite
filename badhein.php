
<!-- ===========================================HEADER>>>START=========================================== -->

<?php include("header.php") ?>

<section class="_cd_er_aq">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_cd_er_aa">
              <ol>
                <li>OUR INITIATIVES</li>
                <li>BADHEIN SABKEKADAM</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</section>




<!-- ===========================================BADHEIN SABKE KADAM=========================================== -->

    <section class="_bd_we_xs_qw">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Badhein Sabke<span>Kadam</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="_mn_cd_we_vd">
              <img src="./assets/images/kadam.png" style="display: block;margin-left: auto;margin-right: auto; width: 30%;" />

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="_mn_cd_we_vd">
              <h5>We supplement the under-served children with the requisite skills and knowledge base to become better citizens and future leaders, especially in the light of COVID-19 and digitalization of classrooms and learning.</h5>
              <h5>To provide students with supplementary education, our aim is to develop a digital ecosystem with the help of our driven educators, each dedicated to a set of up to 5 students</h5>

            </div>
          </div>
        </div>
      </div>
    </section> 

<!-- ===========================================MEET OUR PARTNERS=========================================== -->

      <section class="_bd_we_xs_qw">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Meet<span>Our Partners</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="_mn_cd_we_vd">
              <div id="owl-carouselPartners" class=" owl-theme">
              
              <div class="item">
                  <img src="assets/images/service1.png">
               </div>

              <div class="item">
                  <img src="assets/images/service2.png">
              </div>

              <div class="item">
                  <img src="assets/images/ccl.png">
              </div>

              <div class="item">
                  <img src="assets/images/bsk.png">
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 


<!-- ===========================================HOLISTIC DEVELOPMENT=========================================== -->

    <section class="_bd_we_xs_qw">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Holistic<span>Development</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="_mn_cd_we_vd">
             <div class="row mx-md-n5">
                <div class="col px-md-5">
                    <div class="p-3 border bg-light" style="    min-height: 340px; margin-bottom: 21px;">
                    <h5 style="text-align: center;">FOR EDUCATORS</h5>
                    <strong>With Firki's wide range of available modules and professional training of 2 weeks, our educators become essentially equipped to shape the future of children associated with Badhein Sabke Kadam.</strong>
                    <br/>
                    <img style="margin:33px 0px 18px 106px" src="./assets/images/firks.png">
                    </div>
                </div>
 <div class="col px-md-5">
                    <div class="p-3 border bg-light" style="min-height: 340px; margin-bottom: 21px;">
                    <h5 style="text-align: center;">FOR STUDENTS</h5>
                    <strong>A strong personality development and holistic learning framework with regular extra-curricular activities such as:</strong>
                    <br/>
                    <ul style="margin:0 35px">
                      <li style="list-style-type: disclosure-closed;">Dance</li>
                      <li style="list-style-type: disclosure-closed;">Arts & Crafts</li>
                      <li style="list-style-type: disclosure-closed;">Music & Singing</li>
                      <li style="list-style-type: disclosure-closed;">Yoga & Movement Therapy</li>
                      <li style="list-style-type: disclosure-closed;">Storytelling and Group Discussions</li>
                      <li style="list-style-type: disclosure-closed;">Poem recitals, etc.</li>
                    </ul>
                    </div>
                </div>
				</div>

            </div>
          </div>
        </div>
        
      </div>
    </section> 

	
	
<!-- ====================================FOOTER>>>STARTED==================================== -->	
	
    <?php include("footer.php") ?>



<script>
    
    $("#owl-carouselPartners").addClass("owl-carousel");
     
      $('#owl-carouselPartners').owlCarousel({
        items:6,
               loop:true,
              margin:80,
              nav:true,
              autoplay: true,
			  autoWidth:true,
              autoplayTimeout: 2000,
                autoplayHoverPause: true,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:2
                  },
                  1000:{
                      items:6
                  }
              }
      
    });
    
    
</script>