<?php
include ("config.php");
$vid=$_GET['vid'];
$sql="DELETE FROM `tbl_vehicle` WHERE vid='$vid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_vehicle.php");
}
else
{

    echo "error";
}
?>  