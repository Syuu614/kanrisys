<?php
//“部长”对部门成员的增加功能。
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$name=$_POST['name'];
$sex=$_POST['sex'];
$place=$_POST['place'];
$depart=$_POST['depart'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$yhm=$_SESSION['yhm'];

$newyhm=$phone;
$newmm='111111';
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}

if ($name==""||$sex==""||$major==""||$place==""||$phone==""||$mail=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
switch ($place){
    case "主席":
        echo "<script>alert('无权限！');history.back();</script>";
        break;
    case "部长":
        echo "<script>alert('无权限！');history.back();</script>";
        break;
    default:
        $auth=0;
        break;
}
$sql1="select depart from user where yhm='$yhm'";
$result=mysqli_query($conn,$sql1);
$myrow=mysqli_fetch_array($result);
$tadedepart=$myrow[0];
if ($depart!=$tadedepart) {
    $depart=$tadedepart;
}
$sql="insert into user values(null,'$newyhm','$newmm','$name','$sex','$major','$phone','$mail','$auth','$place','$depart')";

$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        echo "<script>alert('插入成功');window.location.href ='/frontend/manager/bmmanager/yhgl/cygl.php';</script>";/**/
    }else{
        echo "<script>alert('插入失败');history.back();</script>";/**/
    }