<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$id=$_POST['id'];
$approve=$_POST['approve'];
$apper=$_POST['apper'];
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
$auth=$myrow1[0];//当前审核者的权限
$name=$myrow1[1];//当前审核者的名字
//获得本注册者的审批情况和审批者
$sql1="select si_check,si_apper from signup where ID='$id'";
$result=mysqli_query($conn,$sql1);
$myrow=mysqli_fetch_array($result);
$yuanlaiapper=$myrow[1];//本注册者的审核者
//判断审核者的权限与当前审批者的权限大小
if ($yuanlaiapper!="--") {
    $sql1="select auth from user where yhm='$yuanlaiapper'";
    $result=mysqli_query($conn,$sql1);
    $myrow1=mysqli_fetch_array($result);
    $apperauth=$myrow1[0];
}elseif ($apper=="--"){//如果没有人审批，则任何有权限的人可以审批
    $apperauth=-1;
}
if ($apperauth>$auth) {
    echo "<script>alert('此人信息已有他人审核！（quan）');</script>";
    return;
}
if ($apperauth==$auth&&$apper!=$name) {
    echo "<script>alert('此人信息已有他人审核！（ming）');history.back();</script>";
    return;
}
if ($id==""||$approve==""||$apper=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update signup set si_check='$approve',si_apper='$apper' where ID='$id'";
$result=mysqli_query($conn,$sql);
echo $id,$approve,$apper.'<br/>';
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        if ($auth==1) {
            echo "<script>alert('更新成功');window.location.href ='/frontend/manager/bmmanager/ybmgl/ybmgl.php';</script>";/**/
            return;
        }
    }else{
        echo "<script>alert('更新失败');history.back();</script>";/**/
        return;
    }