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
          <form action="updatefood.php?fid=<?php echo $_REQUEST['fid']?>" method="POST" class="">
          <?php
                    include("config.php");
                    $fid=$_GET['fid'];
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_food` WHERE `fid`='$fid'");
                    while($row=mysqli_fetch_array($result)){
                        ?>
          <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">FOOD NAME</label>
              <div class="col-sm-10">
                <input type="text"value="<?php echo $row['fname']; ?>" name="fname" class="form-control">
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
              <input type="file" value="<?php echo $row['fimage'];?>" name="fimage" class="form-control">
              
              </div>
            </div>
            
            <div class="row mb-3">
           
              <div class="col-sm-10">
                <button name="sub" type="submit"   class="btn btn-primary">Submit Form</button>
              </div>
            </div>
<?php
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