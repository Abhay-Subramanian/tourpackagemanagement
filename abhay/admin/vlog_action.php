<?php
include("config.php");//include configuration file

if(isset($_POST['add_blog']))
{
    $name=$_POST['name'];
    $des=$_POST['des'];
    $author=$_POST['author'];
    $date=$_POST['date'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$image);
    
    $sql="INSERT INTO `tbl_blog` (`name`,`des`,`author`,`date`,`image`) VALUES ('$name','$des','$author','$date','$image')";
if(mysqli_query($connection,$sql))
{
    header("location:view_blog.php");
}
else
{

    echo "error";
}
}

?>