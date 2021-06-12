<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>非法访问！</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
</head>
<body>
<script>alert('禁止直接通过地址栏访问!');history.back();</script>
</body>
</html>
<?php 
if(!file_exists("countE.txt")){
    $one_file=fopen("countE.txt","w+"); //建立一个统计文本，如果不存在就创建
    echo"全校已经有<font color='red'><b>1</b></font>次的尝试被记录！"; //首次直接输出第一次
    fwrite("countlog.E","1");  //把数字1写入文本
    fclose("$one_file");
}else{ //如果不是第一次访问直接读取内容，并+1,写入更新后再显示新的访客数
    $num=file_get_contents("countE.txt");
    $num++;
    file_put_contents("countE.txt","$num");
    $newnum=file_get_contents("countE.txt");
    echo"已经有<font color='red'><b>".$newnum."</b></font>次的尝试被记录！";
}
?>