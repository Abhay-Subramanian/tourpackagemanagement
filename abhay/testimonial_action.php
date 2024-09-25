<?php
include("config.php");//include configuration file

if(isset($_POST['add_userreg']))
{
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $testimonial=$_POST['testimonial'];
    $rating=$_POST['rating'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"admin/assets/img/".$image);
    
    $sql="INSERT INTO `tbl_testimonial` (`name`,`designation`,`testimonial`,`image`,`rating`) VALUES ('$name','$designation','$testimonial','$image','$rating')";
if(mysqli_query($connection,$sql))
{
    header("location:view_testimonial.php");
}
else
{

    echo "error";
}
}

?>