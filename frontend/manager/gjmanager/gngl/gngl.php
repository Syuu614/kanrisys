<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet">
</head>
<body>    
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="/frontend/manager/gjmanagermain.php">社团信息管理系统（后台模式）</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
		<div class="col-md-12 column">
		<table class="table table-hover" >
		<h1>功能管理</h1>
  <tbody>
      <tr>
      <td>功能名称</td>
      <td>功能开关</td>
    </tr>
    <tr>
            <?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $sql1="select * from function";
  $result=mysqli_query($conn,$sql1);
  while ($myrow=mysqli_fetch_array($result)){
?>
  <td><?php echo $myrow[1];?></td>
  <td><div class="form-check form-check-inline">
    <form method="post" action="/backend/gnmanage/gnmanage.php"><input type="hidden" name="id" value="<?php echo $myrow[0]; ?>"><input type="hidden" name="flag" value="1">
        <button class="btn btn-success" type="submit">开</button></form>
        <form method="post" action="/backend/gnmanage/gnmanage.php"><input type="hidden" name="id" value="<?php echo $myrow[0]; }?>"><input type="hidden" name="flag" value="0">
        <button class="btn btn-warning" type="submit">关</button></form></div>
  </td>
  </tbody>
 </table>
 <a href="/frontend/manager/gjmanagermain.php" class="btn btn-link">返回</a>
 </div>
 </div>
 </div>
 </body>
 <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
 </html>