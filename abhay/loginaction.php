<?php
session_start();
include('config.php');
$email=$_POST['email'];
$password=$_POST['password'];
if($email && $password !=""){
    $sql1="SELECT * FROM `tbl_userreg` WHERE `email`='$email' AND `password`='$password'";
    $res1=mysqli_query($connection,$sql1);
    $row = mysqli_fetch_array($res1);
    $_SESSION['uid'] = $row['uid'];
    $_SESSION['name'] = $row['name'];
    $count1=mysqli_num_rows($res1);

    if($count1 > 0){
        header("location:index.php");
    }else if($email && $password !=""){ 
        $sql="SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `password`='$password'";
        $res=mysqli_query($connection,$sql);
        $count=mysqli_num_rows($res);
        if($count > 0)
        {
            $_SESSION['Admin'] = "Admin";
            header("location:admin/index.php");
        
        }else{
    // echo 'incorrect';
    echo "<script>alert('Invalid username or password!'); window.location ='login.php';</script>";
    }
}else{
    header("location:login.php");
}}else{
    echo "<script>alert('Invalid username or password!'); window.location ='login.php';</script>";
}

?>