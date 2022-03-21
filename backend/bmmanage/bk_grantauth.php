<?php
/*成员管理中“快速授权”功能。 */
include '../class/Sql.php';
$id=$_POST['id'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
$sql="update user set auth='1'where ID='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('授权成功！');history.back();</script>";
}else{
    echo "<script>alert('授权失败！');history.back();</script>";
}