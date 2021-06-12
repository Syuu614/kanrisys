<?php
include './class/Sql.php';
$ac_name=$_POST['ac_name'];
$ac_per=$_POST['ac_per'];
$ac_tani=$_POST['ac_tani'];
$ac_class=$_POST['ac_class'];
$ac_budget=$_POST['ac_budget'];
$ac_info=$_POST['ac_info'];
$ac_tip=$_POST['ac_tip'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
if ($ac_name==""||$ac_per==""||$ac_tani==""||$ac_class==""||$ac_budget=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="insert into activity(ID,ac_name,ac_per,ac_tani,ac_class,ac_budget,ac_info,ac_tip) values(null,'$ac_name','$ac_per','$ac_tani','$ac_class','$ac_budget','$ac_info','$ac_tip')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('更新成功');history.back();</script>";
}else{
    echo "<script>alert('更新失败');history.back();</script>";
}