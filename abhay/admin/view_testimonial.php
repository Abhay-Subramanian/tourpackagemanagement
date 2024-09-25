<?php
include("header.php");
?>
<main id="main" class="main">

    <div class="pagetitle">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TESTIMONIAL</h5>
             

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESIGNATION</th>
                    <th scope="col">TESTIMONIAL</th>
                    <th scope="col">IMAGE</th>
            

                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_testimonial`");
                    while($row=mysqli_fetch_array($result)){
                        ?>
                  <tr>
                    
                    <td><?php echo $row['tid'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['designation'];?></td>
                    <td><?php echo $row['testimonial'];?></td>
                    
                    <td><img src="assets/img/<?php echo $row['image'];?>" width="80" height="80"></td>
                    
                  </tr>
               <?php
                    }
                    ?>
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php

?>