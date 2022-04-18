
<!-- ===========================================HEADER>>>START=========================================== -->

<?php include("header.php") ?>



<section class="_cd_er_aq">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_cd_er_aa">
              <ol>
                <li>Home</li>
                <li>About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- ===========================================MYRA’SMISSION=========================================== -->

      <section id="aboutus" class="_ab_er_we">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Myra’s<span>Mission </span></h2>
            </div>
			</div>
   
<div id="container">
<img src="./assets/images/graph.png">
</div>
  </div>
   </div>

<!-- ===========================================PEOPLE OF MYRA=========================================== -->

<div class="container">
    <div class="row">
     <div class="col-12">
      <div class="_hg_we_fe">
         <h2>People of<span>Myra</span></h2>
      </div>
      </div>
<?php include("./slider/about_us.php"); ?>
</div>
  </div>


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
                 <img src="assets/images/namya.png">
              </div>

              <div class="item">
                 <img src="assets/images/challangers.png">
              </div>

              <div class="item">
                 <img src="assets/images/ananda.png">
              </div>

              <div class="item">
                 <img src="assets/images/dordarshan.png">
              </div>

              <div class="item">
                <img src="assets/images/dark.png">
                </div>
				
             <div class="item">
                <img src="assets/images/sandhi.png">
              </div>
			  
              <div class="item">
                 <img src="assets/images/taqdeer.png">
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 


<!-- ===========================================MYRA IN MEDIA=========================================== -->  	
	
     <section class="_bd_we_xs_qw">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>Myra In<span>Media</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="_mn_cd_we_vd">
              <img src="./assets/images/news.png"/>
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
              margin:50,
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