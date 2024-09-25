<?php
include ("config.php");
$fid=$_GET['fid'];
$sql="DELETE FROM `tbl_food` WHERE fid='$fid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_foodmenu.php");
}
else
{

    echo "error";
}
?>  