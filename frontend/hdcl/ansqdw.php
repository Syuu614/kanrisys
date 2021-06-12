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
		<div class="col-md-4 column" id="panel">
		<form method="post" action="">
		<table class="table table-hover" >
		<h1>活动处理</h1>
		<h2>查询社团活动</h2>
		<hr/>
  <tbody>
      <tr>
      <td>请输入一个部门名称：<input type="text" name="ac_tani" maxlength="10" placeholder="部门名称" class="form-control"/></td>
    </tr>
    <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary"></td>
    </tr>
  </tbody>
</table>
</form>
<div style="margin-bottom:61px">
<a href="hdcx.php" class="btn btn-link">返回</a>
</div>
		</div>
		<div class="col-md-8 column" id="panel">
				<table class="table table-hover" >
		<h3>查询结果</h3>
		<hr/>
  <tbody>
    <tr>
      <td>活动名称</td>
      <td>负责人</td>
      <td>申请单位</td>
      <td>活动级别</td>
      <td>预算金额</td>
    </tr>
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $ac_tani=$_POST['ac_tani'];
  
  $sql="select ac_name,ac_per,ac_tani,ac_class,ac_budget,ac_info,ac_tip,ac_approve,ac_apper from activity where ac_tani='$ac_tani'";
  $result=mysqli_query($conn,$sql);
  while ($myrow=mysqli_fetch_array($result)) {
?>
    <tr>
      <td><a href="#" data-toggle="modal" data-target="#xiangxi"><?php echo $myrow[0];?></a></td>
      <td><span><?php echo $myrow[1]; ?></span></td>
      <td><span><?php echo $myrow[2]; ?></span></td>
      <td><span><?php echo $myrow[3]; ?></span></td>
      <td><span><?php echo $myrow[4]; ?></span></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
		</div>
	</div>
</div>
<!-- 详细资料 -->
<div class="modal fade" id="xiangxi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
        <div class="modal-content">
<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $ac_tani=$_POST['ac_tani'];
  
  $sql="select ac_name,ac_per,ac_tani,ac_class,ac_budget,ac_info,ac_tip,ac_approve,ac_apper from activity where ac_tani='$ac_tani'";
  $result=mysqli_query($conn,$sql);
  while ($myrow=mysqli_fetch_array($result)) {
?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $myrow[0]; ?></h4>
            </div>
            <div class="modal-body">

              <ul>
				<li>
					<span>负责人：<?php echo $myrow[1]; ?></span>
				</li>
				<li>
					<span>申请单位：<?php echo $myrow[2]; ?></span>
				</li>
				<li>
					<span>活动级别：<?php echo $myrow[3]; ?></span>
				</li>
				<li>
					<span>预算金额：<?php echo $myrow[4]; ?></span>
				</li>
				<li>
					<span>活动简介：<?php echo $myrow[5]; ?></span>
				</li>
				<li>
					<span>备注：<?php echo $myrow[6]; ?></span>
				</li>
				<li>
					<span>审批情况：<?php echo $myrow[7]; ?></span>
				</li>
				<li>
					<span>审批者：<?php echo $myrow[8]; ?></span>
				</li>
			</ul>
    <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>
