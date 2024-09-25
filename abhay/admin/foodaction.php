<?php
include("config.php");//include configuration file

if(isset($_POST['add_food']))
{
    $fname=$_POST['fname'];
    $fprice=$_POST['fprice'];
    $fcategory=$_POST['fcategory'];
    $fimage = $_FILES['fimage']['name'];
    move_uploaded_file($_FILES['fimage']['tmp_name'],"assets/img/".$fimage);
     $sql="INSERT INTO `tbl_food` (`fname`,`fprice`,`fcategory`,`fimage`) VALUES ('$fname','$fprice','$fcategory','$fimage')";
if(mysqli_query($connection,$sql))
{
    header("location:view_foodmenu.php");
}
else
{

    echo "error";
}
}

?>