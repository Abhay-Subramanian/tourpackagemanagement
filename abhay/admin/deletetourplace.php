<?php
include ("config.php");
$pid=$_GET['pid'];
$sql="DELETE FROM `tbl_addtourplace` WHERE pid='$pid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_tourplace.php");
}
else
{

    echo "error";
}
?>  