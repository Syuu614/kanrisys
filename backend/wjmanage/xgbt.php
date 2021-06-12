<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$name=$_POST['xbt'];
$id=$_POST['id'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
//获得的当前审批者的权限和名字
$sql1="select auth,name from user where yhm='$yhm'";
$result=mysqli_query($conn,$sql1);
$myrow1=mysqli_fetch_array($result);
$auth=$myrow1[0];
if ($name=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update file set fi_name='$name' where ID='$id'";
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        if ($auth==2) {
            echo "<script>alert('更新成功');window.location.href ='/frontend/manager/gjmanager/wjgl/cxwj.php';</script>";/**/
            return;
        }
        if ($auth==1) {
            echo "<script>alert('更新成功');window.location.href ='/frontend/manager/bmmanager/wjgl/cxwj.php';</script>";/**/
            return;
        }
    }else{
        echo "<script>alert('更新失败');history.back();</script>";
        return;
    }