<?php
/*sql语句差错
 * if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));}
 * */
$host="localhost";//这是本地数据库
$username="root";//数据库账户
$password="root";//数据库密码
$dbname="is";//选择何种数据库
$conn=mysqli_connect($host,$username,$password,$dbname) or die("数据库连接失败！".mysqli_error());