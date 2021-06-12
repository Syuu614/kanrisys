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
        <div class="container"><a class="navbar-brand" href="/frontend/manager/bmmanagermain.php">社团信息管理系统（部门后台模式）</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
		<div class="col-md-8 column" id="panel">
		<form method="post" action="/backend/xwmanage/bk_insert.php"><!--  -->
		<table class="table table-hover" >
		<h1>新闻管理</h1>
		<h2>增加新闻</h2>
		<hr/>
  <tbody>
      <tr>
      <td>新闻标题：<input type="text" name="title" placeholder="新闻标题" class="form-control"/></td>
    </tr>
        <tr>
      <td>新闻作者：<input type="text" name="author" placeholder="新闻作者" class="form-control"/></td>
    </tr>
    <tr>
      <td>新闻时间：<input type="text" name="time" placeholder="新闻时间" class="form-control"/></td>
    </tr>
    <tr>
      <td>所属部门：<input type="text" name="belong" placeholder="所属部门" class="form-control"/></td>
    </tr>
    <tr>
      <td>内容：
      <div id="div1">
    <p>请输入新闻内容</p>
</div>
<textarea id="text1" style="width:100%; height:200px;" name="content"></textarea>
      </td>
    </tr>
    <tr>
      <td><input type="submit" value="提交" class="btn btn-primary">
        <input type="reset" value="重置" class="btn btn-primary">
        </td>       
    </tr>
    </form>
  </tbody>
</table>
<div style="margin-bottom:61px">
<a href="/frontend/manager/bmmanager/xwgl/xwgl.php" class="btn btn-link">返回</a>
</div>
		</div>
		<div class="col-md-4 column">
		<div></div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 引入 wangEditor.min.js -->
<script type="text/javascript">
    const E = window.wangEditor
    const editor = new E('#div1')
    const $text1 = $('#text1')
    const $yulan = $('#yulan')
    editor.config.onchange = function (html) {
        // 第二步，监控变化，同步更新到 textarea
        $text1.val(html)
    }
    editor.create()

    // 第一步，初始化 textarea 的值
    $text1.val(editor.txt.html())
</script>
</html>
<?php 
$fromurl="/Error.php"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
{
    header("Location:".$fromurl); exit;
}
?>