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
          <h5 class="card-title">ADD TOUR PACKAGES</h5>

          <!-- General Form Elements -->
          <form action="packageacton.php" method="POST" class="" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PLACES</label>
              <div class="col-sm-10">
                <input type="text" name="places" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">ACTIVITIES</label>
              <div class="col-sm-10">
              <textarea name="activities"  class="form-control" id="" cols="30" rows="12"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="description"class="form-control" id="" cols="30" rows="14"></textarea>
              </div>
            </div>
          
      
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="image" class="form-control">
              
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">PRICE</label>
              <div class="col-sm-10">
              <input type="number" name="prices" class="form-control">
              
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Vehicle</label>
              <div class="col-sm-10">
                <select class="form-control" name="busid" id="">
                <?php
                    include("config.php");
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_vehicle`");
                    while($row=mysqli_fetch_array($result)){
                        ?>
                  <option value="<?php echo $row['vid']; ?>"><?php echo $row['v_name']; ?></option>
                  <?php
                    }
                    ?>
                </select>              
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">No. Of Days</label>
              <div class="col-sm-10">
              <input type="number" name="days" class="form-control">
              
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit"  name="add_package"class="btn btn-primary">Submit Form</button>
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