<?php
include("header.php");
?>


<main id="main">


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

            <form action="userregaction.php" method="post" role="form" class="form p-5">
                <h1>REGISTRATION FORM</h1>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" pattern="[0-9]{10}" class="form-control" name="ph_number"  placeholder="Phone Number" required>
              </div>
              <div class="form-group mt-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="password" required><br>
              </div>
              
              <div class="text-center"><button type="submit" class="btn btn-success" name="add_userreg">Submit</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

