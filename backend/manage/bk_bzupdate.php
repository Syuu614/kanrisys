<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$id=$_POST['id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$place=$_POST['place'];
$depart=$_POST['depart'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$yhm=$_SESSION['yhm'];
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
        echo "<script>alert('无权限！');history.back();</script>";
        return;
    case "部长":
        echo "<script>alert('无权限！');history.back();</script>";
        return ;
    default:
        $auth=0;
        break;
}
$sql1="select depart from user where yhm='$yhm'";
$result=mysqli_query($conn,$sql1);
$myrow=mysqli_fetch_array($result);
$tadedepart=$myrow[0];
if ($depart!=$tadedepart) {
    echo "<script>alert('无权限！');history.back();</script>";
    return ;
}
$sql="update user set name='$name',sex='$sex',place='$place',depart='$depart',major='$major',phone='$phone',mail='$mail',auth='$auth' where ID='$id'";

$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
if ($result) {
    echo "<script>alert('更新成功');window.location.href ='/frontend/manager/bmmanager/yhgl/cygl.php';</script>";/**/
}else{
    echo "<script>alert('更新失败');history.back();</script>";
}