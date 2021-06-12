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
		<div class="col-md-8 column" id="panel">
		<form method="post" action="/backend/bk_hdsq.php">
		<table class="table table-hover" >
		<h1>活动处理</h1>
		<h2>活动申请</h2>
		<hr/>
  <tbody>
      <tr>
      <td>活动名称：<input type="text" name="ac_name" placeholder="活动名称" class="form-control"/></td>
    </tr>
        <tr>
      <td>负责人：<input type="text" name="ac_per" maxlength="10" placeholder="负责人" class="form-control"/></td>
    </tr>
    <tr>
      <td>申请单位：<input type="text" name="ac_tani" maxlength="10" placeholder="申请单位" class="form-control"/></td>
    </tr>
    <tr>
      <td>活动级别：<input type="radio" name="ac_class" checked value="社团级或以上"/>社团级或以上<input type="radio" name="ac_class" value="部门级"/>部门级<input type="radio" name="ac_class" value="仅部门内部"/>仅部门内部</td>
    </tr>
    <tr>
      <td>预算金额（CNY）：<input name="ac_budget" class="form-control" type="number" min="0" value="0"/></td>
    </tr>
    <tr>
      <td>活动介绍：<textarea name="ac_info" placeholder="活动介绍" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td>备注：<textarea name="ac_tip" placeholder="如需场地请注明,没有请填写“无”" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary"></td>
    </tr>
  </tbody>
</table>
</form>
<div style="margin-bottom:61px">
<a href="hdcl.php" class="btn btn-link">返回</a>
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
                           <a class="btn btn-link" href="/frontend/manager/gjmanager/hdgl/hdgl.php">返回活动管理（后台）</a>
<?php }elseif ($auth==1){?>
                           <a class="btn btn-link" href="/frontend/manager/bmmanager/hdgl/hdgl.php">返回部门活动管理（后台）</a>
<?php }?>
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