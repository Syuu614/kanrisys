<?php
use PhpMyAdmin\Session;

/*$host="localhost";
$username="root";
$password="root";
if ($connID=mysqli_connect($host,$username,$password)) {
    echo 1;
}else{
    echo 0;
}*/
include './class/Sql.php';
session_start();
$_SESSION['yhm']=$_POST['yhm'];
$_SESSION['mm']=$_POST['mm'];
$yhm=$_POST['yhm'];
$mm=$_POST['mm'];

if($yhm==NULL||$mm==NULL||$yhm==""||$mm==""){
    echo "<script>alert('用户名或密码输入错误！');history.back();</script>";
    return;
}
$sql="select * from user where yhm='$yhm'and mm='$mm'";
$result=mysqli_query($conn,$sql);
$res=mysqli_num_rows($result);
if ($res) {
    echo "登录成功！";
    header("Location:../frontend/main.php");
}else {
    echo "<script>alert('用户名或密码输入错误！');history.back();</script>";
    return;
}