<?php

include("header.php");
?>
<style>
  .rating {
  --dir: right;
  --fill: gold;
  --fillbg: rgba(100, 100, 100, 0.15);
  --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
  --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
  --stars: 5;
  --starsize: 2rem;
  --symbol: var(--star);
  --value: 1;
  --w: calc(var(--stars) * var(--starsize));
  --x: calc(100% * (var(--value) / var(--stars)));
  block-size: var(--starsize);
  inline-size: var(--w);
  position: relative;
  touch-action: manipulation;
  -webkit-appearance: none;
}

.rating::-webkit-slider-runnable-track {
  background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
  block-size: 100%;
  mask: repeat left center/var(--starsize) var(--symbol);
  -webkit-mask: repeat left center/var(--starsize) var(--symbol);
}

.rating::-webkit-slider-thumb {
  height: var(--starsize);
  opacity: 0;
  width: var(--starsize);
  -webkit-appearance: none;
}


/* NO JS */

.rating--nojs::-webkit-slider-thumb {
  background-color: var(--fill);
  box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
  opacity: 1;
  width: 1px;
}
</style>
   
   
   <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <i><h1 align="center">TESTIMONIALS</h1></i>
        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_testimonial");
          while ($row=mysqli_fetch_array($ret)){
              ?>
          <div class="col-md-3">
          
                    
          <!-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100"> -->

            <!-- <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100"> -->
              <!-- <div class="swiper-wrapper"> -->

                <!-- <div class="swiper-slide"> -->
                  <div class="testimonial-item">
                    <p>
                      
                     <b> <?php  echo $row['name'];?> </b><br>
                      <?php  echo $row['designation'];?><br>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php  echo $row['testimonial'];?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['image'];?>" class="img-fluid" alt="" height="80" width="100">
                    <input class="rating rating--nojs" disabled max="5" step="1" type="range" value="<?php  echo $row['rating'];?>" name="rating">

                   
                    
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

   