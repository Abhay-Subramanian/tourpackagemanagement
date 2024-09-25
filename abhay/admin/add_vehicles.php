<?php
include("header.php");
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>VEHICLES</h1>
  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ADD VEHICLES</h5>

          <!-- General Form Elements -->
          <form action="vehicleaction.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">VEHICLE NAME</label>
              <div class="col-sm-10">
                <input type="text" name="v_name" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">TYPE</label>
              <div class="col-sm-10">
              <input type="text" name="v_type" class="form-control">
              </div>
              </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">CATEGORY</label>
              <div class="col-sm-10">
              <input type="text" name="v_category" class="form-control">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="v_image" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" name="add_vehicle" class="btn btn-primary">Submit Form</button>
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