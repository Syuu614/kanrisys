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

				<form method="post" action="/backend/ybmmanage/bk_ybm.php">
<table class="table table-hover" >
		<h1>预报名管理</h1>
		<h2>详细信息</h2>
		<hr/>
  <tbody>
  	<?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
  $yhm=$_SESSION['ybm_yhm'];
  if (isset($yhm)||$yhm!=null||$yhm!="") {      
      $sql="select * from signup where si_yhm='$yhm'";      
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
      <td><b>姓名：</b><?php echo $myrow[3]; ?></td>
    </tr>
        <tr>
      <td><b>性别：</b><?php echo $myrow[4]; ?></td>
    </tr>
    <tr>
      <td><b>专业：</b><?php echo $myrow[5]; ?></td>
    </tr>
    <tr>
      <td><b>电话：</b><?php echo $myrow[6]; ?></td>
    </tr>
    <tr>
      <td><b>邮箱：</b><?php echo $myrow[7]?></td>
    </tr>
    <tr>
      <td><b>志愿部门：</b><?php echo $myrow[8]; ?></td>
    </tr>
    <tr>
      <td><b>是否调剂：</b><?php echo $myrow[9]; ?></td>
    </tr>
    
    <tr>
      <td><b>自己的优势：</b><br/><?php echo $myrow[10]; ?></td>
    </tr>
    <tr>
      <td><b>审核状态：</b><br/><?php 
          if ($myrow[11]=="待审核") {
              echo "<span style='color:#BA9132;'>待审核，请耐心等待。</span>";
          }elseif ($myrow[11]=="通过"){
              echo "<span style='color:green;'>通过，请等待后续面试通知。</span>";
          }elseif ($myrow[11]=="不通过"){
              echo "<span style='color:red;'>很遗憾，弊社没有合适的部门适合您。</span>";
          }
?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
        <a href="ybm.php">返回</a>
</form>
<div style="margin-bottom:61px">
</div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>