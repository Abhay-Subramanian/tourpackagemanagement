<?php
include("config.php");
if(isset($_POST['sub']))
{
$pid=$_GET['pid'];
$places = $_POST['places'];
$itinerary = $_POST['itinerary'];
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$image);
$sql = "UPDATE `tbl_itinarary` SET `places`='$places',`itinerary`='$itinerary',`image`='$image' WHERE `pid`='$pid'";
if(mysqli_query($connection,$sql)){
    header("location:view_itenerary.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>