<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>社团信息管理系统</title>
<link rel="shortcut icon" type="image/svg+xml" href="https://eevee.fun/littleBall.ico">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/css/yqlj.css" rel="stylesheet">
</head>
<body>    
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="../main.php">社团信息管理系统</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../grxxwh/grxxwh.php">个人信息维护</a></li>
                    <li class="nav-item"><a class="nav-link" href="../hdcl/hdcl.php">活动处理</a></li>
                    <li class="nav-item"><a class="nav-link" href="../stwjll/stwjll.php">社团文件浏览</a></li>
                    <li class="nav-item"><a class="nav-link" href="../stxwll/stxwll.php">社团新闻浏览</a></li>
                    <li class="nav-item"><a class="nav-link" href="../aqtc.php">安全退出</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">更多&nbsp;</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="yqlj/yqlj.php">友情链接</a><a class="dropdown-item" href="../dlzhsz/dlzhsz.php">登录账户设置</a><a class="dropdown-item" href="../about.php">关于系统</a>
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
		<div class="col-md-12 column" style="margin-top:61px">
		  <div class="card d-inline-flex link" >
		  
                        <div class="card-body" style="border-radius: 0px;">
                        <a href="http://www.njupt.edu.cn/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="http://www.njupt.edu.cn/_upload/tpl/00/2c/44/template44/images/njupt-favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>南京邮电大学</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>南京邮电大学官网</span></div>
                            </div>
                        </div>
                        </a>
                    </div>
		<div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.eevee.fun/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://eevee.fun/littleBall.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>Toki</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>作者博客</span></div>
                            </div>
                        </div>
                        </a>
        </div>            
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.runoob.com/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://static.runoob.com/images/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>菜鸟教程</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>菜鸟教程 - 学的不仅是技术，更是梦想！</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.csdn.net/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://g.csdnimg.cn/static/logo/favicon32.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>CSDN</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>CSDN - 专业开发者社区</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
         <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://cloud.tencent.com/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://cloud.tencent.com/favicon.ico?t=201902181234"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>腾讯云</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>腾讯云 - 产业智变 云启未来</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.xp.cn/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.xp.cn/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>小皮面板(phpstudy)</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>小皮面板(phpstudy) - 让天下没有难配的服务器环境！</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.phpmyadmin.net/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.phpmyadmin.net/static/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>phpMyAdmin</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>Bringing MySQL to the web!</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
         <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.php.cn/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.php.cn/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>php中文网</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>php中文网-教程_手册_视频-免费php在线学习平台</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.bootcdn.cn/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.bootcdn.cn/assets/ico/favicon.ico?1621385211555"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>BootCDN</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>BootCDN - Bootstrap 中文网开源项目免费 CDN 加速服务</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
                <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.cnki.net/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.cnki.net/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>中国知网</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>中国知网</span></div>
                            </div>
                        </div>
                        </a>
        </div>        
        
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.upyun.com/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.upyun.com/static/favicon-64x64.png"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>又拍云</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>又拍云-加速在线业务-CDN-云存储</span></div>
                            </div>
                        </div>
                        </a>
        </div>
        
                
        <div class="card d-inline-flex link" >
		<div class="card-body" style="border-radius: 0px;">
                        <a href="https://www.wangeditor.com/" target="_blank" ><!-- https://cdn.eevee.fun/linkdef.jpg -->
                            <div><img class="avatar" src="https://www.wangeditor.com/favicon.ico"></div>
                            <div class="url">
                                <div style="margin: 0.42rem 0;">
                                    <h4>wangEditor</h4>
                                </div>
                                <div style="margin: 0.42rem 0;"><span>wangEditor - 轻量级 web 富文本编辑器</span></div>
                            </div>
                        </div>
                        </a>
        </div>
        
                    </div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>