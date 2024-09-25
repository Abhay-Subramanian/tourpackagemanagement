<?php
include("config.php");
if(isset($_POST['sub']))
{
$blid=$_GET['blid'];
$name = $_POST['name'];
$des = $_POST['des'];
$author = $_POST['author'];
$date = $_POST['date'];
$sql = "UPDATE `tbl_blog` SET `name`='$name',`des`='$des',`author`='$author',`date`='$date' WHERE `blid`='$blid'";
if(mysqli_query($connection,$sql)){
    header("location:view_blog.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($connection);
}
}
?>