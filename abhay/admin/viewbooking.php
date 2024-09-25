<?php
include("header.php");
?>
<main id="main" class="main">

    
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">VIew Booking</h5>
             

              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                  <th scope="col">Booking ID</th>
                  <th scope="col">Name</th>
                 
                  <!-- <th scope="col">Address</th> -->
                  <th scope="col">Phone Number</th>
                
                  <th scope="col">Price</th>
                  <th scope="col">Gpay ID</th>
                 
                  <th scope="col">Status</th>
                  <th scope="col">Approve/Cancel</th>
            

                  </tr>
                </thead>
                <tbody>
                <?php
                                                include("config.php");
                                                    $ret=mysqli_query($connection,"select * from tbl_book");
                                                    $row=mysqli_num_rows($ret);
                                                    if($row>0){
                                                    while ($row=mysqli_fetch_array($ret)) {

                                                    ?>
                                                <tr>
                                               
                                                <th scope="row"><?php  echo $row['id'];?></th>
                  <td><?php  echo $row['name'];?></td>
                
                  <td><?php  echo $row['ph_no'];?></td>
                 
           
                  <td><?php  echo $row['price'];?></td>
                  <td><?php  echo $row['gpayid'];?></td>
                 
                  <td>
                  <?php
        if($row['status']==1)
        {
          echo "Approved";
        }
          else
          {
            echo "Not Approved"; 
          }
        ?>
                  </td>
                  <?php
                  if($row['status']==1)
                  {
    echo "<td><a class='btn btn-danger' href='cancelbooking.php?id=".$row['id']."'>Cancel Booking</a></td>";
}     
else
          {
            echo "<td><a class='btn btn-primary' href='approvebooking.php?id=".$row['id']."'>Approve</a></td>";
 
          }               
    ?>
                                                </tr>
                                               <?php }}?>
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
