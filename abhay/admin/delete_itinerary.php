<?php
include ("config.php");
$pid=$_GET['pid'];
$sql="DELETE FROM `tbl_itinarary` WHERE pid='$pid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_itenerary.php");
}
else
{

    echo "error";
}
?>  