<?php
include("header.php");
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1> BLOG </h1>
  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ADD BLOG</h5>

          <!-- General Form Elements -->
          <form action="vlog_action.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">NAME</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label"> DESCRIPTION </label>
              <div class="col-sm-10">
              <textarea name="des" class="form-control" id="" cols="30" rows="12"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">DATE</label>
              <div class="col-sm-10">
                <input type="date" name="date" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">AUTHOR</label>
              <div class="col-sm-10">
                <input type="text" name="author" class="form-control">
              </div>
            </div>
            
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"> IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="image" class="form-control">
              
              </div>
            </div>
            <div class="row mb-3">
           
           <div class="col-sm-10">
             <button name="add_blog" type="submit"   class="btn btn-primary">Submit Form</button>
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
include("");
?>