<?php
//修改密码功能实现。
include './class/Sql.php';
$yhm=$_POST['yhm'];
$mm=$_POST['mm'];
$mm2=$_POST['mm2'];
$yyhm=$_SESSION['yhm'];
if($yhm==NULL||$mm==NULL||$mm2==NULL||$yhm==""||$mm==""||$mm2==""){
    echo "<script>alert('用户名或密码输入错误！mm2');history.back();</script>";
    return;
}
if($mm2!=$mm){
    echo "<script>alert('两次密码输入不同！');history.back();</script>";
    return;
}
$sql="select id from user where yhm='$yyhm'";
$result=mysqli_query($conn,$sql);
$myrow=mysqli_fetch_array($result);
$yid=$myrow[0];
$sql="select yhm from user where yhm='$yhm' and id<>'$yid'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num) {
    echo "<script>alert('用户名已被注册！');history.back();</script>";
    return ;
}
$sql="update user set yhm='$yhm',mm='$mm' where yhm='$yyhm'";
$result=mysqli_query($conn,$sql);
if ($result) {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    echo "<script>alert('修改成功！');window.location.href ='/index.php';</script>";
    return ;
}else {
    echo "<script>alert('用户名或密码输入错误！');history.back();</script>";
    return;
}