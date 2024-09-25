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
          <h5 class="card-title">UPDATE VEHICLES</h5>

          <!-- General Form Elements -->
          <form action="update_vehicle.php?vid=<?php echo $_REQUEST['vid']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $vid=$_GET['vid'];
                    $sql="SELECT * FROM `tbl_vehicle` WHERE `vid`='$vid'";
                    $res=mysqli_query($connection,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 
                     <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">NAME</label>
              <div class="col-sm-10">
              <input type="text"value="<?php echo $row['v_name']; ?>" name="v_name" class="form-control">
              </div>
              </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">TYPE</label>
              <div class="col-sm-10">
              <input type="text"value="<?php echo $row['v_type']; ?> "name="v_type" class="form-control">
              </div>
              </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">CATEGORY</label>
              <div class="col-sm-10">
              <input type="text" value="<?php echo $row['v_category']; ?>"name="v_category" class="form-control">
              </div>
            </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" value="<?php echo $row['v_image']; ?>"name="v_image" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" name="sub" class="btn btn-primary">UPDATE</button>
              </div>
            </div><?php
                    }
                    ?>

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