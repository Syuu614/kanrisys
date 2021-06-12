<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
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
$sql="insert into department values(null,'$de_name','$de_info')";
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        echo "<script>alert('插入成功');window.location.href ='/frontend/manager/gjmanager/bmgl/bmgl.php';</script>";/**/
    }else{
        echo "<script>alert('插入失败');history.back();</script>";/**/
    }