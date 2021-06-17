<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$name=$_POST['name'];
$sex=$_POST['sex'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$target=$_POST['target'];
$adj=$_POST['adj'];
$intro=$_POST['intro'];
$yhm=$_SESSION['ybm_yhm'];
if ($name==""||$sex==""||$major==""||$phone==""||$mail==""||$target==""||$adj==""||$intro=="") {
    echo "<script>alert('表单不能为空！');history.back();</script>";
    return;
}
$sql="update signup set si_name='$name',si_sex='$sex',si_major='$major',si_phone='$phone',si_mail='$mail',si_depart='$target',si_adjust='$adj',si_intro='$intro' where si_yhm='$yhm'";
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
if ($result) {
    echo "<script>alert('提交成功');history.back();</script>";
}else{
    echo "<script>alert('提交失败');history.back();</script>";/**/
}