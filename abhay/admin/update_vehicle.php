<?php
include("config.php");
if(isset($_POST['sub']))
{
$vid=$_GET['vid'];
$v_name = $_POST['v_name'];
$v_type = $_POST['v_type'];
$v_category = $_POST['v_category'];
$v_image = $_POST['v_image'];
$v_image = $_FILES['v_image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$image);
$sql = "UPDATE `tbl_vehicle` SET `v_name`='$v_name',`v_type`='$v_type',`v_category`='$v_category',`v_image`='$v_image' WHERE `vid`='$vid'";
if(mysqli_query($connection,$sql)){
    header("location:view_vehicle.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>