<?php
include ("config.php");
$blid=$_GET['blid'];
$sql="DELETE FROM `tbl_blog` WHERE blid='$blid'";
if(mysqli_query ($connection,$sql))
{
    header("location:view_blog.php");
}
else
{

    echo "error";
}
?>  