<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/css/stxwll.css" rel="stylesheet">
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
        <td><h3>浏览所有新闻</h3></td>
      </tr>
      <tr>
      <td>
        <form class="form-inline" method="post" action="">
          <input type="text" name="ss" placeholder="搜索新闻" class="form-control"/>
          <button type="submit" class="btn btn-default" style=""><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </td>
    </tr>
      <tr>
      <td><a href="bmxw.php" class="btn btn-link">浏览本部门新闻</a></td>
    </tr>
    <tr>
      <td><a href="stxwll.php" class="btn btn-link">返回</a></td>
    </tr>
  </tbody>
</table>
<div style="margin-bottom:61px">

</div>
		</div>
		<div class="col-md-8 column" style="margin-top:10px;">
		  <table class="table table-hover" >
		    <tbody>
		    
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $ss=$_POST['ss'];
  if (isset($ss)||$ss!=null||$ss!="") {
      $sql="select ID,ne_title,ne_content from news where ne_title like('%$ss%') or ne_content like('%$ss%')";
  }else{
      $sql="select ID,ne_title,ne_content from news order by id";
  }
  
  $result=mysqli_query($conn,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));}
  while ($myrow=mysqli_fetch_array($result)) {
      
      
      
?>
    <tr>
      <td>
      <form method="post" action="news.php">
        <input type="hidden" name="id" value="<?php echo $myrow[0]; ?>">
        <button class="btn btn-link" data-toggle="modal" data-target="#xiangxi" type="submit"><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[1]); ?></button>
        </form>
        <span class="shenglue"><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[2]); ?></span><br/><br/>
      </td>
    </tr>
<?php } ?>

  </tbody>
</table>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>