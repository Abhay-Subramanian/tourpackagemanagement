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
              <h5 class="card-title">VIEW PACKAGES</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Place ID</th>
                    <th scope="col">Places</th>
                    <th scope="col">Activities</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete </th>

                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_addpackage`");
                    while($row=mysqli_fetch_array($result)){
                        ?>
                  <tr>
                    
                    <td><?php echo $row['pid'];?></td>
                    <td><?php echo $row['places'];?></td>
                    <td><?php echo $row['activities'];?></td>
                    <td><?php echo $row['description'];?></td>
      
                    <td><?php echo $row['prices'];?></td>

                    <td><img src="assets/img/<?php echo $row['image'];?>" width="80" height="80"></td>
                    <?php
                    echo"<td><a href='edit_package.php?pid=".$row['pid']."'><button class='btn btn-warning'>Update</button></a></td>";
                    echo"<td><a href='delete_tourpackage.php?pid=".$row['pid']."'><button class='btn btn-danger'>Delete</button></a></td>";
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