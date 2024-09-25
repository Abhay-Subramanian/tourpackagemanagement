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
  --starsize: 3rem;
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
<section id="testimonials" class="testimonials section-bg">
      <div class="container">
      <i><h1 align="center">PACKAGES</h1></i>
 
        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_addpackage");
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
                      <?php  echo $row['activities'];?>
                      <?php  echo $row['description'];?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['image'];?>" class="img-fluid" alt="" height="80" width="100">
                    <h3><?php  echo $row['prices'];?> </h3>

                    <?php
                                        if(isset($_SESSION['uid'])){
                                        echo "<a class='btn btn-primary ' href='packagesingle.php?pid=".$row['pid']."'>Book</a>";
                                        }
                                        else{
                                        echo "<a class='btn btn-primary ' href='login.php'>Book</a>";
                                        }                    
                                        ?>
                    
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


    <section id="testimonials" style="background-color:#009970;" class="testimonials section-bg">
      <div class="container">
      <i><h1 align="center">PLACES</h1></i>

        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_addtourplace");
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
                      <?php  echo $row['description'];?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['image'];?>" class="img-fluid" alt="" height="80" width="100">
                    <h3><?php  echo $row['places'];?> </h3>
                    
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


     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials section-bg">
      <div class="container">
      <i><h1 align="center">FOOD MENU</h1></i>

        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_food");
          while ($row=mysqli_fetch_array($ret)){
              ?>
          <div class="col-md-3">
          
                    
          <!-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100"> -->

            <!-- <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100"> -->
              <!-- <div class="swiper-wrapper"> -->

                <!-- <div class="swiper-slide"> -->
                  <form action="cartaction.php?fid=<?php echo $row['fid']; ?>" method="POST">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php  echo $row['fname'];?>
                      <?php  echo $row['fcategory'];?>
                      <!-- <?php  echo $row['fimage'];?> -->
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['fimage'];?>" class="img-fluid" alt="" height="80" width="100">
            <input type="text" value="<?php echo $row['fprice']; ?>" name="price" hidden>
            <?php
                                        if(isset($_SESSION['uid'])){
                                        echo "<button type='submit' class='btn btn-primary'>Add To Cart</button>";
                                        }
                                        else{
                                        echo "<a class='btn btn-primary' href='login.php'>Add To Cart</a>";
                                        }                    
                                        ?>
                    
                  </div>
                </div>
                </form>
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


    <section id="testimonials" style="background-color:#009970;" class="testimonials section-bg">
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

    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
      <i><h1 align="center">VEHICLE</h1></i>

        <div class="row">
        <?php
          include("config.php");
          $ret=mysqli_query($connection,"select * from tbl_vehicle");
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
                      <?php  echo $row['v_name'];?>
                      <?php  echo $row['v_type'];?>
                      <?php  echo $row['v_category'];?>
                      <!-- <?php  echo $row['v_image'];?> -->
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="admin/assets/img/<?php  echo $row['v_image'];?>" class="img-fluid" alt="" height="80" width="100">
                   
                    
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

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <!-- <h2>Contact</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/place/GREEN+KERALA+FREAKERZ/@10.2573591,76.2810716,12z/data=!4m10!1m2!2m1!1sgreenkerala+holidays,angamaly!3m6!1s0x3b080735a8ffb3f9:0x79a7d168aa0d80a6!8m2!3d10.2158137!4d76.3717436!15sCh1ncmVlbmtlcmFsYSBob2xpZGF5cyxhbmdhbWFseZIBDXRvdXJfb3BlcmF0b3LgAQA!16s%2Fg%2F11h847nrnk?entry=ttu" frameborder="0" allowfullscreen></iframe> -->
            
            
              </div>
            </div>

            <form action="testimonial_action.php" method="post" role="form" class="form p-5" enctype="multipart/form-data">
                <h1>TESTIMONIAL</h1>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="designation" id="designation" placeholder="Your Designationn" required>
                </div>
              </div>
              <div class="form-group mt-3">
               <textarea name="testimonial" class="form-control" placeholder="Your Testimonial" id="comments" cols="30" rows="10"></textarea>
              </div>
            <br>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="file" class="form-control" name="image" id="designation" placeholder="Your Image" required>
                </div>
                <div class="form-group mt-3">

                Rating: <input class="rating rating--nojs" max="5" step="1" type="range" value="3" name="rating">
            </div>
                <br><br>
              
              <div class="text-center"><button type="submit" class="btn btn-success" name="add_userreg">Submit</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->


<?php
include("footer.php");
?>