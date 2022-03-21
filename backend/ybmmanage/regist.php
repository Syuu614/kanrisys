<?php
//预报名系统注册功能。
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$yhm=$_POST['yhm'];
$mm=$_POST['mm'];
$mm2=$_POST['mm2'];
if($yhm==NULL||$mm==NULL||$mm2==NULL||$yhm==""||$mm==""||$mm2==""){
    echo "<script>alert('用户名或密码输入错误！');history.back();</script>";
    return;
}
if($mm2!=$mm){
    echo "<script>alert('两次密码输入不同！');history.back();</script>";
    return;
}
$sql="select yhm from user where yhm='$yhm'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num) {
    echo "<script>alert('用户名已被注册！');history.back();</script>";
    return ;
}
$sql="insert into signup values(null,'$yhm','$mm','0','0','0','0','0','0','0','0','待审核','--')";

$result=mysqli_query($conn,$sql);

if ($result) {
    echo "<script>alert('注册成功！');window.location.href ='/frontend/zc/ybmdl.php';</script>";
    return ;
}else {
    echo "<script>alert('注册失败！');history.back();</script>";/**/
    return;
}