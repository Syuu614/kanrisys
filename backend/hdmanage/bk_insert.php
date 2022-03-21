<?php
//新闻管理中“增加新闻”功能。
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$ne_title=$_POST['title'];
$ne_author=$_POST['author'];
$ne_time=$_POST['time'];
$ne_belong=$_POST['belong'];
$ne_content=$_POST['content'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
if ($ne_title==""||$ne_author==""||$ne_time==""||$ne_belong==""||$ne_content=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="insert into news values(null,'$ne_title','$ne_content','$ne_author','$ne_time','$ne_belong')";
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
    if ($result) {
        echo "<script>alert('插入成功');window.location.href ='/frontend/manager/gjmanager/xwgl/xwgl.php';</script>";/**/
    }else{
        echo "<script>alert('插入失败');history.back();</script>";/**/
    }