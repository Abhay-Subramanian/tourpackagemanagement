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
              <h5 class="card-title">ITINERARY</h5>
             

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">PID</th>
                    <th scope="col">PLACES</th>
                    <th scope="col">ITINERARY</th>
                    <th scope="col">IMAGE</th>
            

                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_itinarary`");
                    while($row=mysqli_fetch_array($result)){
                        ?>
                  <tr>
                    
                    <td><?php echo $row['pid'];?></td>
                    <td><?php echo $row['places'];?></td>
                    <td><?php echo $row['itinerary'];?></td>
    
                    <td><img src="assets/img/<?php echo $row['image'];?>" width="80" height="80"></td>
                    <?php
                    echo"<td><a href='edit_itinerary.php?pid=".$row['pid']."'><button class='btn btn-warning'>Update</button></a></td>";
                    echo"<td><a href='delete_itinerary.php?pid=".$row['pid']."'><button class='btn btn-danger'>Delete</button></a></td>";
?>
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