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
		<h1>成员管理</h1>
		<hr/>
		<div style="margin-bottom:5px"><a href="/frontend/manager/gjmanager/yhgl/glzgl.php" class="btn btn-link">管理者管理</a><a href="insert.php" class="btn btn-link">增加新成员</a><a href="/frontend/manager/gjmanager/yhgl/cygl.php" class="btn btn-link">返回上一级</a><a href="/frontend/manager/gjmanagermain.php" class="btn btn-link">返回后台主界面</a></div> 
		</div>
	</div>
	<div class="row clearfix" style="margin-top:10px">
	<div class="col-md-12 column">
	  <table class="table table-hover" >
		    <tbody>
		    <tr>
      <td>##</td>
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
  $id=$_POST['id'];
  if (isset($id)||$id!=null||$id!="") {      
      $sql="select ID,name,sex,place,depart,major,phone,mail from user where ID='$id'";      
  }else{
      echo "<script>alert('获取成员信息发生错误！');history.back();</script>";
      return;
  }
  
  $result=mysqli_query($conn,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));}
  while ($myrow=mysqli_fetch_array($result)) {
      
      
      
?>
      <tr>
      <td>原来的信息</td>
      <td><span><?php echo $myrow[1]; ?></span></td>
      <td><span><?php echo $myrow[2]; ?></span></td>
      <td><span><?php echo $myrow[3]; ?></span></td>
      <td><span><?php echo $myrow[4]; ?></span></td>
      <td><span><?php echo $myrow[5]; ?></span></td>
      <td><span><?php echo $myrow[6]; ?></span></td>
      <td><span><?php echo $myrow[7]; ?></span></td>
      </tr>
      <form method="post" action="/backend/manage/bk_update.php" class="form-inline">
      <input type="hidden" name="id" value="<?php echo $myrow[0]; ?>">
      <tr>
      <td>新信息</td>     
      <td><input type="text" name="name" placeholder="新的名字" class="form-control" value="<?php echo $myrow[1];?>"/></td>
      <td><input type="text" name="sex" placeholder="新的性别" class="form-control" value="<?php echo $myrow[2];?>"/></td>
      <td><input type="text" name="place" placeholder="新的职位" class="form-control" value="<?php echo $myrow[3];?>"/></td>
      <td><input type="text" name="depart" placeholder="新的部门" class="form-control" value="<?php echo $myrow[4];?>"/></td>
      <td><input type="text" name="major" placeholder="新的专业" class="form-control" value="<?php echo $myrow[5];?>"/></td>
      <td><input type="text" name="phone" placeholder="新的电话号码" class="form-control" value="<?php echo $myrow[6];?>"/></td>
      <td><input type="text" name="mail" placeholder="新的邮箱" class="form-control" value="<?php echo $myrow[7];?>"/></td>
      <td>
        <input type="submit" value="提交" class="btn btn-link">
        <input type="reset" value="重置" class="btn btn-link">
      </td>
      </tr>
      </form>
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