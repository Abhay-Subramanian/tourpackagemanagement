<?php
include("config.php");
if(isset($_POST['sub']))
{
$pid=$_GET['pid'];
$places = $_POST['places'];
$description = $_POST['description'];
$prices = $_POST['prices'];
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$image);
$sql = "UPDATE `tbl_addpackage` SET `places`='$places',`description`='$description',`image`='$image' ,`prices`='$prices'WHERE `pid`='$pid'";
if(mysqli_query($connection,$sql)){
    header("location:view_tourpackages.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>