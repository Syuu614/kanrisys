<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/css/grxxwh.css" rel="stylesheet">
</head>
<body>    
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="/frontend/main.php">社团信息管理系统</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/frontend/grxxwh/grxxwh.php">个人信息维护</a></li>
                    <li class="nav-item"><a class="nav-link" href="/frontend/hdcl/hdcl.php">活动处理</a></li>
                    <li class="nav-item"><a class="nav-link" href="/frontend/stwjll/stwjll.php">社团文件浏览</a></li>
                    <li class="nav-item"><a class="nav-link" href="/frontend/stxwll/stxwll.php">社团新闻浏览</a></li>
                    <li class="nav-item"><a class="nav-link" href="/frontend/aqtc.php">安全退出</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">更多&nbsp;</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="/frontend/yqlj/yqlj.php">友情链接</a><a class="dropdown-item" href="/frontend/dlzhsz/dlzhsz.php">登录账户设置</a><a class="dropdown-item" href="/frontend/about.php">关于系统</a>
                        <?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $yhm=$_SESSION['yhm'];
  $sql1="select auth from user where yhm='$yhm'";
  $result=mysqli_query($conn,$sql1);
  $myrow=mysqli_fetch_array($result);
  $auth=$myrow[0];
  if ($auth==2) {
?>
                           <a class="dropdown-item" href="/frontend/manager/gjmanagermain.php">高级管理后台</a>
<?php }elseif ($auth==1){?>
                           <a class="dropdown-item" href="/frontend/manager/bmmanagermain.php">部门管理后台</a>
<?php }?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column" id="panel">
		<table class="table table-hover" >
		<h1>登录账户设置</h1>
		<h2>修改用户名和密码</h2>
		<hr/>
  <tbody>
      <tr>
      <td>旧用户名：<input type="text" name="yhm" maxlength="10" placeholder="姓名" class="form-control" disabled /></td>
      </tr>
      <tr>
      <td>旧密码：<input type="password" name="mm" maxlength="20" placeholder="旧密码" class="form-control" disabled /></td>
      </tr>
      <tr>
      <td><input type="submit" value="提交" class="btn btn-primary" disabled >
        <input type="reset" value="重置" class="btn btn-primary" disabled ></td>
    </tr>
  </tbody>
</table>
		</div>
		<div class="col-md-6 column"style="margin-top:101px">
		<form method="post" action="/backend/bk_xgzhmm.php">
		<table class="table table-hover" >
  <tbody>
      <tr>
      <td>新用户名：<input type="text" name="yhm" maxlength="10" placeholder="姓名" class="form-control"/></td>
      </tr>
      <tr>
      <td>新密码：<input type="password" name="mm" maxlength="20" placeholder="新密码" class="form-control"/></td>
      </tr>
      <tr>
      <td>再次输入新密码：<input type="password" name="mm2" maxlength="20" placeholder="再次输入" class="form-control"/></td>
      </tr>
      <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary">
        <a href="dlzhsz.php" class="btn btn-link">返回</a>
        </td>
    </tr>
  </tbody>
</table>
</form>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>