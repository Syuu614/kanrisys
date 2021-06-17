<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="css/login.css" rel="stylesheet">
</head>
<body>    
    <div class="container login" style="margin-top:100px">
    <h1>欢迎使用社团信息管理系统</h1>
    <h2>登录</h2>
      <form method="post" action="./backend/login.php">
        <input type="text" name="yhm" maxlength="10" placeholder="用户名" class="form-control"/>
        <br/><br/>
        <input type="password" name="mm" maxlength="20" placeholder="密码" class="form-control"/>
        <br/><br/>
        <input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary">
        
      </form>
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $sql1="select fu_link,fu_flag from function where fu_name='社团报名系统'";
  $result=mysqli_query($conn,$sql1);
  $myrow=mysqli_fetch_array($result);
  $auth=$myrow[1];
  if ($auth==1) {
?>
<div style="text-align: right"><a href="<?php echo $myrow[0];?>">社团报名系统</a></div>
<?php }?>        
    </div>
</body>
</html>
<?php
