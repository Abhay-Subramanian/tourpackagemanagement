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
          <form action="update_blog.php?blid=<?php echo $_REQUEST['blid']?>" method="POST" class="">
          <?php
                    include("config.php");
                    $blid=$_GET['blid'];
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_blog` WHERE `blid`='$blid'");
                    while($row=mysqli_fetch_array($result)){
                        ?>
          <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">NAME</label>
              <div class="col-sm-10">
                <input type="text"value="<?php echo $row['name']; ?>" name="name" class="form-control">
              </div
              >
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">DESCRIPTION</label>
              <div class="col-sm-10">
                <textarea name="des" id="des" cols="30" rows="10" class="form-control"><?php echo $row['des']; ?></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">AUTHOR</label>
              <div class="col-sm-10">
                <input type="text"value="<?php echo $row['author']; ?>" name="author" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">DATE</label>
              <div class="col-sm-10">
                <input type="date"value="<?php echo $row['date']; ?>" name="date" class="form-control">
              </div>
            </div>
            
            <!-- </div> -->
          
      
           
            
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
include("");
?>