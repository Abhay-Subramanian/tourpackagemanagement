<?php
include("config.php");//include configuration file

if(isset($_POST['add_package']))
{
    $places=$_POST['places'];
    $activities=$_POST['activities'];
    $description=$_POST['description'];
    $prices=$_POST['prices'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$image);
    $busid=$_POST['busid'];
    $days=$_POST['days'];
 $sql="INSERT INTO `tbl_addpackage` (`places`,`activities`,`description`,`prices`,`image`,`busid`,`days`) VALUES('$places','$activities','$description','$prices','$image','$busid','$days')";
if(mysqli_query ($connection,$sql))
{
    header("location:view_tourpackages.php");
}
else
{

    echo "error";
}
}

?>