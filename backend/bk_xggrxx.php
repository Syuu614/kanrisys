<?php
//修改个人信息功能实现
include './class/Sql.php';
$name=$_POST['name'];
$sex=$_POST['sex'];
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
if ($name==""||$major==""||$phone==""||$mail=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update user set name='$name',sex='$sex',major='$major',phone='$phone',mail='$mail' where yhm='$yhm'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('更新成功');history.back();</script>";
}else{
    echo "<script>alert('更新失败');history.back();</script>";
}