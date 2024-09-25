<?php
include("header.php");
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1> TOURIST PLACES</h1>
  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ADD TOURIST PLACES</h5>

          <!-- General Form Elements -->
          <form action="placeaction.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PLACE</label>
              <div class="col-sm-10">
                <input type="text" name="places" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="description" class="form-control" id="" cols="30" rows="14"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="image" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              
              <div class="col-sm-10">
                <button type="submit" name="add_place"class="btn btn-primary">Submit Form</button>
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