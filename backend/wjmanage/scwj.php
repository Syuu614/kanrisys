<?php
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
$name=$_POST['name'];
$file=$_POST['file'];
if ($_FILES['file']['type']=="application/pdf") {
//取得文件信息
@($file = $_FILES['file']);
//判断文件是否上传
if (is_uploaded_file($file['tmp_name'])) {
    //是上传文件;
}else {
    echo "<script>alert('上传失败');history.back();</script>";
}
//判断文件是否已经存在
if (file_exists("C:\phpstudy_pro\WWW\bs/files/" . $_FILES["file"]["name"]))
{
    echo "<script>alert('文件已经存在');history.back();</script>";
    return;
}
//移动文件
if (is_uploaded_file($file['tmp_name'])) {//文件存放地址------------>
    if (move_uploaded_file(iconv("UTF-8","gbk", $file['tmp_name']), 'C:\phpstudy_pro\WWW\bs/files/'.iconv("UTF-8","gbk", $file['name']))) {
        //上传成功后写入数据库
        $root='/files/'.$file['name'];
        $sql="insert into file values(null,'$name','$root')";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));}
            if ($result) {
                echo "<script>alert('上传成功');history.back();</script>";/**/
                return;
            }else{
                echo "<script>alert('上传失败');history.back();</script>";/**/
                return;
            }
    }else {echo "<script>alert('上传失败');history.back();</script>";return;}
}else {
    echo "<script>alert('上传失败');history.back();</script>";
    return;
}
}else {
    echo "<script>alert('只允许上传PDF文件！');history.back();</script>";
    return;
}