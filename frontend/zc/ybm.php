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
		<h1>注册</h1>
		<h2>社团报名系统</h2>
		<hr/>
		<h4>嗨，<?php echo $_SESSION['ybm_yhm'];?>😃。请完善你的信息，方便以后联系。</h4>
  <tbody>
      <tr>
      <td><input type="hidden" name="yhm" value="<?php echo $_SESSION['ybm_yhm']; ?>">
      姓名：<input type="text" name="name" maxlength="10" placeholder="姓名" class="form-control"/></td>
    </tr>
        <tr>
      <td><div class="form-check form-check-inline">性别：<input type="radio" name="sex" checked value="男" class="form-check-input"/>男<input type="radio" name="sex" value="女" class="form-check-input"/>女</div></td>
    </tr>
    <tr>
      <td>专业：<input type="text" name="major" maxlength="10" placeholder="专业" class="form-control"/></td>
    </tr>
    <tr>
      <td>电话：<input type="text" name="phone" maxlength="11" placeholder="电话" class="form-control"/></td>
    </tr>
    <tr>
      <td>邮箱：<input type="text" name="mail" placeholder="邮箱" class="form-control"/></td>
    </tr>
    <tr>
      <td>志愿部门：
       <?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
      $sql="select * from department";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));}
  while ($myrow=mysqli_fetch_array($result)) {
?>
<input type="radio" name="target" value="<?php echo $myrow[1]; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $myrow[2]; ?>"/><?php echo $myrow[1]; }?>
      </td>
      </tr>
      <tr>
      <td><div class="form-check form-check-inline">是否接受调剂：<input type="radio" name="adj" checked value="是" class="form-check-input"/>是<input type="radio" name="adj" value="否" class="form-check-input"/>否</div></td>
    </tr>
    <tr>
      <td>介绍你的优势：<textarea name="intro" placeholder="没有优势请填“无”" class="form-control"></textarea></td>
    </tr>
    <tr>
    <?php 
include 'C:\phpstudy_pro\WWW\bs\backend\class\Sql.php';
//------------------------------------------------------------------------------------------
$yhm=$_SESSION['ybm_yhm'];
      $sql="select si_phone,si_check from signup where si_yhm='$yhm'";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));}
  $myrow=mysqli_fetch_array($result);
  if ($myrow[0]==0) {
?>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary"></td>
<?php }else{?>
      <td ><a href="yourinfo.php" class="btn btn-link">你的信息</a>审核状态：
        <?php 
          if ($myrow[1]=="待审核") {
              echo "<span style='color:#BA9132;'>待审核，请耐心等待。</span>";
          }elseif ($myrow[1]=="通过"){
              echo "<span style='color:green;'>通过，请等待后续面试通知。</span>";
          }elseif ($myrow[1]=="不通过"){
              echo "<span style='color:red;'>很遗憾，弊社没有合适的部门适合您。</span>";
          }
}?>
      </td>
    </tr>
  </tbody>
</table>
        <a href="/index.php">退出</a>
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