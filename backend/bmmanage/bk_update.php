<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$id=$_POST['id'];
$de_name=$_POST['name'];
$de_info=$_POST['info'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
if ($de_name==""||$de_info=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update department set de_name='$de_name',de_info='$de_info' where ID='$id'";

$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
if ($result) {
    echo "<script>alert('更新成功');history.back();</script>";/**/
}else{
    echo "<script>alert('更新失败');history.back();</script>";
}