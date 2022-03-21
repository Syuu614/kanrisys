<?php
/*部门管理中的“删除功能”。前端传递了部门的ID，根据ID删除数据库中的数据。 */
include '../class/Sql.php';
$id=$_POST['id'];
$yhm=$_SESSION['yhm'];
if ($yhm=="") {
    unset($_SESSION['yhm']);
    unset($_SESSION['mm']);
    header("Location:../index.php");
    return ;
}
$sql="delete from department where ID='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('删除成功');history.back();</script>";
}else{
    echo "<script>alert('删除失败');history.back();</script>";
}