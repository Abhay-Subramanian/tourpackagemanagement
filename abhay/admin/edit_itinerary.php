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
          <h5 class="card-title">UPDATE ITINERARY</h5>

          <!-- General Form Elements -->
          <form action="update_itinerary.php?pid=<?php echo $_REQUEST['pid']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $pid=$_GET['pid'];
                    $sql="SELECT * FROM `tbl_itinarary` WHERE pid='$pid'";
                    $res=mysqli_query($connection,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>      
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">PLACES</label>
              <div class="col-sm-10">
                <input type="text" value="<?php echo $row['places']; ?>"name="places" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label"> ITINERARY</label>
              <div class="col-sm-10">
              <textarea name="itinerary" class="form-control" id="" cols="30" rows="12"><?php echo $row['itinerary']; ?></textarea>
              </div>
            </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">IMAGE</label>
              <div class="col-sm-10">
              <input type="file" name="image" value="<?php echo $row['image']; ?>" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button name="sub" type="submit"  class="btn btn-primary">UPDATE</button>
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