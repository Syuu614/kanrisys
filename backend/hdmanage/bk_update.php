<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$id=$_POST['id'];
$ac_name=$_POST['name'];
$ac_per=$_POST['per'];
$ac_tani=$_POST['tani'];
$ac_class=$_POST['class'];
$ac_budget=$_POST['budget'];
$ac_info=$_POST['info'];
$ac_tip=$_POST['tip'];
$ac_approve=$_POST['approve'];
$ac_apper=$_POST['apper'];
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
$name=$myrow1[1];
//获得本活动的审批情况和审批者
$sql1="select ac_approve,ac_apper from activity where ID='$id'";
$result=mysqli_query($conn,$sql1);
$myrow=mysqli_fetch_array($result);
$approve=$myrow[0];
$apper=$myrow[1];
//判断审核者的权限与当前审批者的权限大小
if ($apper!="--") {
    $sql1="select auth from user where yhm='$apper'";
    $result=mysqli_query($conn,$sql1);
    $myrow1=mysqli_fetch_array($result);
    $apperauth=$myrow1[0];
}elseif ($apper=="--"){//如果没有人审批，则任何有权限的人可以审批
    $apperauth=-1;
}

if ($apperauth>$auth) {
    echo "<script>alert('此活动已有他人代理！（quan）');</script>";
    echo '当前审批者名：'.$name.'当前审批者权'.$auth;
    echo '审批者名：'.$approve.'审批者权'.$apperauth;
    return;
}
if ($apperauth==$auth&&$apper!=$name) {
    echo "<script>alert('此活动已有他人代理！（ming）');history.back();</script>";
    return;
}
if ($ac_name==""||$ac_per==""||$ac_tani==""||$ac_class==""||$ac_budget==""||$ac_apper=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}

$sql="update activity set ac_name='$ac_name',ac_per='$ac_per',ac_tani='$ac_tani',ac_class='$ac_class',ac_budget='$ac_budget',ac_info='$ac_info',ac_tip='$ac_tip',ac_approve='$ac_approve',ac_apper='$ac_apper' where ID='$id'";
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
if ($result) {
    if ($auth==2) {
        echo "<script>alert('更新成功');window.location.href ='/frontend/manager/gjmanager/hdgl/hdgl.php';</script>";/**/
        return;
    }
    if ($auth==1) {
        echo "<script>alert('更新成功');window.location.href ='/frontend/manager/bmmanager/hdgl/hdgl.php';</script>";/**/
        return;
    }
}else{
    echo "<script>alert('更新失败');history.back();</script>";/**/
    return;
}