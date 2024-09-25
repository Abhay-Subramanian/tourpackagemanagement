<?php
include("config.php");
if(isset($_POST['sub']))
{
$fid=$_GET['fid'];
$fname = $_POST['fname'];
$fcategory = $_POST['fcategory'];
$fimage = $_FILES['fimage']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$fimage);
$sql = "UPDATE `tbl_food` SET `fname`='$fname',`fcategory`='$fcategory',`fimage`='$image' WHERE `fid`='$fid'";
if(mysqli_query($connection,$sql)){
    header("location:view_foodmenu.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>