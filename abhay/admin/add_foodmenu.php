<?php
include("header.php");
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1> FOOD MENU</h1>
  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ADD FOOD MENU</h5>

          <!-- General Form Elements -->
          <form action="foodaction.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">FOOD NAME</label>
              <div class="col-sm-10">
                <input type="text" name="fname" class="form-control">
              </div>
            </div>
            <label for="inputText" class="col-sm-2 col-form-label">PRICE</label>
              <div class="col-sm-10">
                <input type="number" name="fprice" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">CATEGORIES</label>
              <div class="col-sm-10">
             <select name="fcategory" id="">
                <option value="breakfast">BREAKFAST</option>
                <option value="lunch">LUNCH</option>
                <option value="dinner">DINNER</option>
             </select>
              </div>
            </div>
            <!-- </div> -->
          
      
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="fimage" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
           
              <div class="col-sm-10">
                <button name="add_food" type="submit"   class="btn btn-primary">Submit Form</button>
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