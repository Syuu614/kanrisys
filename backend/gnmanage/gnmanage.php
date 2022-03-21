<?php
//功能管理功能，对于一些功能的开关管理。
include '../class/Sql.php';
$id=$_POST['id'];
$flag=$_POST['flag'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
if ($id==""||$flag=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update function set fu_flag='$flag' where ID='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('功能调整成功');history.back();</script>";
}else{
    echo "<script>alert('功能调整失败');</script>";/*history.back();*/
}