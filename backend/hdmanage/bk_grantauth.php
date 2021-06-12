<?php
include '../class/Sql.php';
$id=$_POST['id'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}

$sql="select ac_approve from activity where ID='$id'";
$result=mysqli_query($conn,$sql);
$myrow=mysqli_fetch_array($result);
$approve=$myrow[0];
if ($approve=="已通过"||$approve=="不通过") {
    echo "<script>alert('已有人受理此活动！');history.back();</script>";
    return ;
}

$sql1="select name from user where yhm='$yhm'";
$result=mysqli_query($conn,$sql1);
$myrow=mysqli_fetch_array($result);
$name=$myrow[0];

$sql="update activity set ac_approve='已通过',ac_apper='$name' where ID='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('授权成功！');history.back();</script>";
}else{
    echo "<script>alert('授权失败！');history.back();</script>";
}