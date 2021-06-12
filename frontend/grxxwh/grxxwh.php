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
		<table class="table table-hover" >
		<h1>个人信息维护</h1>
		<hr/>
  <tbody>
    <tr>
      <td>姓名</td>
      <td>性别</td>
      <td>职位</td>
      <td>部门</td>
      <td>专业</td>
      <td>电话</td>
      <td>邮箱</td>
    </tr>
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $yhm=$_SESSION['yhm'];
  if ($yhm=="") {
      header("Location:../index.php"); ;
  }
  $sql="select name,sex,place,depart,major,phone,mail from user where yhm='$yhm'";
  $result=mysqli_query($conn,$sql);
  while ($myrow=mysqli_fetch_array($result)) {
?>
    <tr>
      <td><span><?php echo $myrow[0]; ?></span></td>
      <td><span><?php echo $myrow[1]; ?></span></td>
      <td><span><?php echo $myrow[2]; ?></span></td>
      <td><span><?php echo $myrow[3]; ?></span></td>
      <td><span><?php echo $myrow[4]; ?></span></td>
      <td><span><?php echo $myrow[5]; ?></span></td>
      <td><span><?php echo $myrow[6]; ?></span></td>
    </tr>
<?php } ?>
  </tbody>
</table>
<a href="xggrxx.php" class="btn btn-link">修改个人信息</a><a href="cxtrxx.php" class="btn btn-link">查询他人信息</a>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>