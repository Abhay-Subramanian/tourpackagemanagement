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
          <form action="update_package.php?pid=<?php echo $_REQUEST['pid']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $pid=$_GET['pid'];
                    $sql="SELECT * FROM `tbl_addpackage` WHERE `pid`='$pid'";
                    $res=mysqli_query($connection,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 

                     <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PLACE</label>
              <div class="col-sm-10">
              <textarea name="places" id="" cols="30"  class="form-control rows="12"><?php echo $row['places']; ?>"</textarea>
              </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">ACTIVITIES</label>
              <div class="col-sm-10">
              <textarea name="activities" id="" cols="30"  class="form-control rows="12"><?php echo $row['activities']; ?>"</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="description" id="" cols="30" class="form-control rows="14"><?php echo $row['description']; ?></textarea>
              </div>
            </div>
          
      
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file"value="<?php echo $row['image']; ?>" name="image" class="form-control">
              
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">prices</label>
              <div class="col-sm-10">
              <input type="number"<?php echo $row['prices']; ?> name="prices" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit"  name="sub"class="btn btn-primary">Submit Form</button>
              </div>
              <?php
                    }
                    ?>
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