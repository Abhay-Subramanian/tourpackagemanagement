<?php
include("config.php");//include configuration file

if(isset($_POST['add_itinerary']))
{
    $places=$_POST['places'];
    $itinerary=$_POST['itinerary'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$image);
    $sql="INSERT INTO `tbl_itinarary` (`places`,`itinerary`,`image`) VALUES ('$places','$itinerary','$image')";
if(mysqli_query ($connection,$sql))
{
    header("location:view_itenerary.php");
}
else
{

    echo "error";
} 
}

?>