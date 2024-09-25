<?php
include("header.php");
?>
    <?php
include('config.php');
$uid=$_SESSION['uid'];
$sql="SELECT * FROM `tbl_userreg` WHERE uid='$uid'";
$res=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($res))
{
?> 
<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
		            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checout</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 ftco-animate">

						<form action="checkoutaction.php" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        	<input type="number" value="<?php  echo $row['uid'];?>" name="uid" class="form-control form-control-lg form-control-a" hidden>

							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Name</label>
	                  <!-- <input type="text" class="form-control" placeholder=""> -->
                      <input name="name" value="<?php  echo $row['name'];?>" type="text" class="form-control" disabled>
                      <input name="name" value="<?php  echo $row['name'];?>" type="text" class="form-control" hidden>

	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Email</label>
	                  <input type="text" name="email" value="<?php  echo $row['email'];?>"  class="form-control" disabled>
                      <input type="text" name="email" value="<?php  echo $row['email'];?>"  class="form-control" hidden>

	                </div>
                </div>
				<div class="row align-items-end">

		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Phone Number</label>
	                    <input type="text" name="ph_no" value="<?php  echo $row['ph_number'];?>"  class="form-control" disabled>
                        <input type="text" name="ph_no" value="<?php  echo $row['ph_number'];?>"  class="form-control" hidden>

	                    </div>
		            </div>
					
                    
						
								
						<div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Gpay ID</label>

	                  <input type="email" name="gpayid"  class="form-control">
	                	</div>
		            </div>
						
	                    
	                    </div>
		            </div>
				
					<div class="row align-items-end">

		            
		           
					<div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Price:</label>
						<?php
								$sql = "SELECT SUM(price) AS total FROM `tbl_cart` WHERE u_id=$uid and status2=0";
								$result = mysqli_query($connection, $sql);
								
								if ($result) {
									$row = mysqli_fetch_assoc($result);
									$sum = $row['total'];
									// echo  $sum;
									echo "<input type='text' value='$sum' name='price'  class='form-control'>";
								} else {
									echo "Error: " . mysqli_error($connection);
								}
								?>		
										
							
						
	                    
	                    </div>
		            </div>
					</div>
	              <div class="col-md-12">
	                <div class="form-group">
	                  <input type="submit" name="submit" class="btn btn-primary" >
	                </div>
                </div>
                <div class="w-100"></div>
                <?php
// }
?>
	          </form><!-- END -->



	          
	          </div>
          </div> <!-- .col-md-8 -->

          </div>

        </div>
      </div>
    </section> <!-- .section -->

<?php
}
?>

<?php
include("footer.php");
?>