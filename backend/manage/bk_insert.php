<?php
//草稿。。。
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

if ($name==""||$sex==""||$major==""||$place==""||$depart==""||$phone==""||$mail=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
switch ($place){
    case "主席":
        $auth=2;
        break;
    case "部长":
        $auth=1;
        break;
    default:
        $auth=0;
        break;
}
$sql="insert into user values(null,'$newyhm','$newmm','$name','$sex','$major','$phone','$mail','$auth','$place','$depart')";

$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        echo "<script>alert('插入成功');window.location.href ='/frontend/manager/gjmanager/yhgl/cygl.php';</script>";/**/
    }else{
        echo "<script>alert('插入失败');history.back();</script>";/**/
    }