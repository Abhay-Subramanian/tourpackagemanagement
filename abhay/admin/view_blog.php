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
              <h5 class="card-title">BLOG</h5>
             

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">AUTHOR</th>
                    <th scope="col">DATE</th>
                    <th scope="col">IMAGE</th>
            

                  </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    $result=mysqli_query($connection,"SELECT * FROM `tbl_blog`");
                    while($row=mysqli_fetch_array($result)){
                        ?>
                  <tr>
                    
                    <td><?php echo $row['blid'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['des'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['date'];?></td>
 
                    <td><img src="assets/img/<?php echo $row['image'];?>" width="80" height="80"></td>
                    <?php
                    echo"<td><a href='edit_blog.php?blid=".$row['blid']."'><button class='btn btn-warning'>Update</button></a></td>";
                    echo"<td><a href='delete_blog.php?blid=".$row['blid']."'><button class='btn btn-danger'>Delete</button></a></td>";
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