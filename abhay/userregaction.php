<?php
include("config.php");//include configuration file

if(isset($_POST['add_userreg']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $ph_number=$_POST['ph_number'];
    $password = $_POST['password'];
    

    $sql="INSERT INTO `tbl_userreg` (`name`,`email`,`ph_number`,`password`) VALUES ('$name','$email','$ph_number','$password')";
if(mysqli_query($connection,$sql))
{
    header("location:login.php");
}
else
{

    echo "error";
}
}

?>