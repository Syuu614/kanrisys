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
$sql="delete from news where ID='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('删除成功');history.back();</script>";
}else{
    echo "<script>alert('删除失败');history.back();</script>";
}