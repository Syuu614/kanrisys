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
    </div>
</body>
</html>
<?php
