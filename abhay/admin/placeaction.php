<?php
include("config.php");//include configuration file

if(isset($_POST['add_place']))
{
    $places=$_POST['places'];
    $description=$_POST['description'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$image);

    $sql="INSERT INTO `tbl_addtourplace` (`places`,`description`,`image`) VALUES ('$places','$description','$image')";
if(mysqli_query ($connection,$sql))
{
    header("location:view_tourplace.php");
}
else
{

    echo "error";
}
}

?>