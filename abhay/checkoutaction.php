<?php
include("config.php");
if(isset($_POST['submit']))
{
$uid = $_POST['uid'];
$name = $_POST['name'];
$email = $_POST['email'];
$ph_no = $_POST['ph_no'];
$place=$_POST['place'];
$price = $_POST['price'];
$gpayid = $_POST['gpayid'];

$sql="UPDATE `tbl_cart` SET `status2`='1' WHERE `u_id`='$uid'";

if(mysqli_query($connection,$sql)){
    $uid = $_POST['uid'];
    $sql2 = "INSERT INTO `tbl_book`(`uid`,`name`,`email`,`ph_no`,`place`,`price`,`gpayid`) VALUES ('$uid','$name','$email','$ph_no','place','$price','$gpayid')";
    if(mysqli_query($connection,$sql2)){
    header("location:payment.php");
    }
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>