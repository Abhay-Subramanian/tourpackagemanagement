<?php
session_start();
include("config.php");

$fo_id = $_GET['fid'];
$u_id=$_SESSION['uid'];
$price=$_POST['price'];
$ret=mysqli_query($connection,"SELECT * FROM `tbl_cart` WHERE `f_id`='$fo_id' AND (`u_id`='$u_id' AND `status2`='0')");
while ($row=mysqli_fetch_array($ret)) {
    $_SESSION['foodid']=$row['f_id'];
    $userid=$row['u_id'];  
}
    $foodid=$_SESSION['foodid'];
    if($fo_id==$foodid && $u_id==$userid){
        echo "<script>alert('Already excists');window.location='viewpackage.php'</script>";
    }
    else{   
        $sql1 = "INSERT INTO `tbl_cart`(`u_id`,`f_id`,`quantity`) VALUES ('$u_id','$fo_id','1')";
            if(mysqli_query($connection,$sql1)){
                header("location:cart.php");
            }else{
                echo "Error".$sql1."<br>".mysqli_error($connection,$sql);
            }
        }
?>