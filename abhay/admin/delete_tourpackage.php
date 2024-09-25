<?php
include ("config.php");
$pid=$_GET['pid'];
$sql="DELETE FROM `tbl_addpackage` WHERE pid='$pid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_tourpackages.php");
}
else
{

    echo "error";
}
?>  