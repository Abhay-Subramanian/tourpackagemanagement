<?php

include("header.php");
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <?php
          include("config.php");
          $pid=$_GET['pid'];
          $ret=mysqli_query($connection,"select * from tbl_addpackage where pid='$pid'");
          while ($row=mysqli_fetch_array($ret)){
              ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="admin/assets/img/<?php  echo $row['image'];?>" alt="">
                </div>

                <!-- <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div> -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Package information</h3>
              <ul>
                <li><strong>Place</strong>: <?php  echo $row['places'];?></li>
                <li><strong>Activities</strong>: <?php  echo $row['activities'];?></li>
                <li><strong>Price</strong>: <?php  echo $row['prices'];?></li>
                <li><strong>Days</strong>: <a href="#"><?php  echo $row['days'];?></a></li>
               
                    <?php
                    $busid=$row['busid'];
                    $ret1=mysqli_query($connection,"select * from tbl_vehicle where vid='$busid'");
          while ($row1=mysqli_fetch_array($ret1)){
            ?>
            <li><strong>Bus</strong>: <a href="#"><?php echo $row1['v_name'];?></a></li>
            <li><strong>Seat Number</strong>: <a href="#"><?php echo $row1['v_category'];?></a></li>
            <?php
          }
                    ?>
                

              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
              <?php  echo $row['description'];?>
              </p>
            </div>


            <a href="checkoutpackage.php?pid=<?php echo $row['pid'] ?>" class="btn btn-primary">Book Now</a>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
<?php
          }
          ?>
  </main><!-- End #main -->


    <?php
include("footer.php");
?>
