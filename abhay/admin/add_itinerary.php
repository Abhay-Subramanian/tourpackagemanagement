<?php
include("header.php");
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1> TOUR PACKAGES</h1>
  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ADD ITINERARY</h5>

          <!-- General Form Elements -->
          <form action="itineraryaction.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PLACES</label>
              <div class="col-sm-10">
                <input type="text" name="places" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label"> ITINERARY</label>
              <div class="col-sm-10">
              <textarea name="itinerary" class="form-control" id="" cols="30" rows="12"></textarea>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"> IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="image" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button name="add_itinerary" type="submit"  class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

   
  </div>
</section>

</main><!-- End #main -->



<?php
include("footer.php");
?>