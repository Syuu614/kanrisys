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
		<h1>预报名管理</h1>
		<hr/>
		<div style="margin-bottom:5px"><a href="/frontend/manager/gjmanagermain.php" class="btn btn-link">返回后台主界面</a></div>
		<form class="form-inline" method="post" action="">
          <input type="text" name="ss" placeholder="查询预报名信息" class="form-control"/>
          <button type="submit" class="btn btn-default" style=""><i class="fa fa-search" aria-hidden="true"></i></button>
        <button type="submit" class="btn btn-link" style="">还原</button>
        </form>   
		</div>
	</div>
	<div class="row clearfix" style="margin-top:10px">
	<div class="col-md-12 column">
	  <table class="table table-hover" >
		    <tbody>
		    <tr>
      <td>姓名</td>
      <td>性别</td>
      <td>专业</td>
      <td>电话</td>
      <td>邮箱</td>
      <td>志愿部门</td>
      <td>是否调剂</td>
      <td>状态</td>
    </tr>
	<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $ss=$_POST['ss'];
  if (isset($ss)||$ss!=null||$ss!="") {
      $sql="select * from signup where si_name like('%$ss%') or si_sex like('%$ss%') or si_major like('%$ss%') or si_phone like('%$ss%') or si_mail like('%$ss%') or si_depart like('%$ss%') or si_adjust like('%$ss%') or si_intro like('%$ss%') or si_check like('%$ss%')";
  }else{
      $sql="select * from signup order by id";
  }
  
  $result=mysqli_query($conn,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));}
  while ($myrow=mysqli_fetch_array($result)) {
      
      
      
?>
      <tr>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[3]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[4]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[5]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[6]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[7]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[8]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[9]); ?></span></td>
      <td><span><?php echo str_ireplace($ss,"<font color='color:#ff0000'>".$ss."</font>",$myrow[11]); ?></span></td>
      <td>
        <form method="post" action="xxxx.php"><input type="hidden" name="id" value="<?php echo $myrow[0]; ?>">
        <button class="btn btn-link" type="submit">查看详细信息</button></form>
      </td>
      <td>
        <form method="post" action="/backend/ybmmanage/bk_delete.php"><input type="hidden" name="id" value="<?php echo $myrow[0]; ?>">
        <button class="btn btn-link" type="submit">删除</button></form>
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
<?php 
$fromurl="/Error.php"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
{
    header("Location:".$fromurl); exit;
}
?>