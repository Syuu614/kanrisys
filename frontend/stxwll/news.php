<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/css/news.css" rel="stylesheet">
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
		<div class="col-md-4 column" id="panel">
		<table class="table table-hover" >
		<h1>社团新闻浏览</h1>
  <tbody>
      <tr>
      <td><a href="syxw.php" class="btn btn-link">浏览所有新闻</a></td>
    </tr>
    <tr>
      <td><a href="bmxw.php" class="btn btn-link">浏览本部门新闻</a></td>
    </tr>
  </tbody>
</table>
<div style="margin-bottom:61px">

</div>
		</div>
		<div class="col-md-8 column" style="margin-top:10px;">
		    
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $id=$_POST['id'];
  $sql="select ne_title,ne_author,ne_time,ne_belong,ne_content from news where ID='$id'";
  $result=mysqli_query($conn,$sql);
  while ($myrow=mysqli_fetch_array($result)) {
?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $myrow[0]; ?></h4>
            </div>
            <div class="modal-body">
            <h5 style="color: #828282;">作者：<?php echo  $myrow[1]; ?>&nbsp;&nbsp;时间：<?php echo $myrow[2]; ?>&nbsp;&nbsp;<?php echo $myrow[3]; ?>的新闻</h5>
            <?php echo $myrow[4]; ?>
    <?php } ?>
            </div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>