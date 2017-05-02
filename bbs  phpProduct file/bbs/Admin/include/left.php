<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../public/admin/js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(../../Public/admin/images/main/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="../../Public/admin/images/main/member.gif" width="44" height="44" /></div>
    <span>用户:&nbsp;&nbsp;<a href=""><b style='color:#ccc;'><?php echo $_SESSION['AuserDetail']['username'];?></b></a>
         <br/>角色:&nbsp;&nbsp;<?php echo $_SESSION['AuserDetail']['auth']==1?'超级管理员':'普通用户';?></span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>用户管理</span>
        <a href="../user/userList.php" target="mainFrame" onFocus="this.blur()">用户管理</a>
      </div>
	  <div class='collapsed'>
        <span>版块管理</span>
        <a href="../type/addType.php" target="mainFrame" onFocus="this.blur()">添加分区</a>
        <a href="../type/manageType.php" target="mainFrame" onFocus="this.blur()">版块管理</a>
      </div>
      <div class='collapsed'>
        <span>帖子管理</span>
        <a href="../post/post.php" target="mainFrame" onFocus="this.blur()">帖子管理</a>
        <a href="../post/recycleList.php" target="mainFrame" onFocus="this.blur()">回收站</a>
      </div>
      <div class='collapsed'>
        <span>网站管理</span>
        <a href="../config/logoConf.php" target="mainFrame" onFocus="this.blur()">logo修改</a>
        <a href="../config/seoConf.php" target="mainFrame" onFocus="this.blur()">seo优化</a>
        <a href="../config/bannConf.php" target="mainFrame" onFocus="this.blur()">banner修改</a>
         <a href="../config/linkConf.php" target="mainFrame" onFocus="this.blur()">友情链接</a>
        <a href="../config/banQuanConf.php" target="mainFrame" onFocus="this.blur()">版权设置</a>
        <a href="../config/exit.php" target="mainFrame" onFocus="this.blur()">网站关闭</a>
    </div>
</body>
</html>
