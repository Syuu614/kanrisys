<?php
include '../class/Sql.php';
$id=$_POST['id'];
$sql="select * from file where ID='$id'";
$result=mysqli_query($conn,$sql);
$myrow=mysqli_fetch_array($result);
if (!file_exists("C:\phpstudy_pro\WWW\bs" . $myrow[2]))
{
    echo "<script>alert('文件不存在');history.back();</script>";//
    return;
}
if (unlink("C:\phpstudy_pro\WWW\bs" . $myrow[2])) {
    $sql="delete from file where ID='$id'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('删除成功');history.back();</script>";
        return;
    }else{
        echo "<script>alert('删除失败');history.back();</script>";
        return;
    }
}