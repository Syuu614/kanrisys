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
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column" id="panel">
		<form method="post" action="/backend/manage/bk_insert.php">
		<table class="table table-hover" >
		<h1>成员管理</h1>
		<h2>增加用户</h2>
		<hr/>
  <tbody>
      <tr>
      <td>姓名：<input type="text" name="name" maxlength="10" placeholder="姓名" class="form-control"/></td>
    </tr>
        <tr>
      <td><div class="form-check form-check-inline">性别：<input type="radio" name="sex" checked value="男" class="form-check-input"/>男<input type="radio" name="sex" value="女" class="form-check-input"/>女</div></td>
    </tr>
    <tr>
    <tr>
      <td>职位：<input type="text" name="place" maxlength="10" placeholder="职位" class="form-control"/></td>
    </tr>
    <tr>
      <td>部门：<input type="text" name="depart" maxlength="10" placeholder="部门" class="form-control"/></td>
    </tr>
      <td>专业：<input type="text" name="major" maxlength="10" placeholder="专业" class="form-control"/></td>
    </tr>
    <tr>
      <td>电话：<input type="text" name="phone" maxlength="11" placeholder="电话" class="form-control"/></td>
    </tr>
    <tr>
      <td>邮箱：<input type="text" name="mail" placeholder="邮箱" class="form-control"/></td>
    </tr>
    <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary"></td>
    </tr>
  </tbody>
</table>
</form>
<div style="margin-bottom:61px">
<a href="/frontend/manager/gjmanager/yhgl/cygl.php" class="btn btn-link">返回成员管理</a>
</div>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>
<?php 
$fromurl="/Error.php"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
{
    header("Location:".$fromurl); exit;
}
?>