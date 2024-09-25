<?php
include("config.php");//include configuration file

if(isset($_POST['add_vehicle']))
{
    $v_name=$_POST['v_name'];
    $v_type=$_POST['v_type'];
    $v_category=$_POST['v_category'];
    $v_image = $_FILES['v_image']['name'];
    move_uploaded_file($_FILES['v_image']['tmp_name'],"assets/img/".$v_image);
    

    $sql="INSERT INTO `tbl_vehicle` (`v_name`,`v_type`,`V_category`,`v_image`) VALUES ('$v_name','$v_type','$v_category','$v_image')";
if(mysqli_query($connection,$sql))
{
    header("location:view_vehicle.php");
}
else
{

    echo "error";
}
}

?>