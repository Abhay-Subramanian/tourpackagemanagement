<?php

include("header.php");
?>

   
   
   <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
      <i><h1 align="center">ITINERARY</h1></i>
    
        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_itinarary");
          while ($row=mysqli_fetch_array($ret)){
              ?>
          <div class="col-md-3">
          
                    
          <!-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100"> -->

            <!-- <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100"> -->
              <!-- <div class="swiper-wrapper"> -->

                <!-- <div class="swiper-slide"> -->
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php  echo $row['places'];?>
                      
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['image'];?>" class="img-fluid" alt="" height="80" width="100">
                   
                    <div><?php  echo $row['itinerary'];?></div>
                    
                    
                  </div>
                </div>
                <?php
                      }
                      ?>
                

              </div>
              <!-- <div class="swiper-pagination"></div> -->
            <!-- </div>
          </div> -->
        <!-- </div> -->

      </div>
    </section><!-- End Testimonials Section -->

    <?php
include("footer.php");
?>
