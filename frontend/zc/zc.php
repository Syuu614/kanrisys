<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>    
<div class="container">
	<div class="row clearfix">
		<div class="col-md-7 column">
		<form method="post" action="/backend/ybmmanage/regist.php">
		<table class="table table-hover" >
		<h1>注册</h1>
		<h2>预报名系统注册</h2>
		<hr/>
  <tbody>
      <tr>
      <td>用户名：<input type="text" name="yhm" maxlength="10" placeholder="姓名" class="form-control"/></td>
      </tr>
      <tr>
      <td>密码：<input type="password" name="mm" maxlength="20" placeholder="新密码" class="form-control"/></td>
      </tr>
      <tr>
      <td>再次输入密码：<input type="password" name="mm2" maxlength="20" placeholder="再次输入" class="form-control"/></td>
      </tr>
      <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary">
        <a href="ybmdl.php" class="btn btn-link">返回</a>
        </td>
    </tr>
  </tbody>
</table>
</form>
<div style="margin-bottom:61px">
</div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>