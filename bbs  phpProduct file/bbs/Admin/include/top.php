<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面头部</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo"><img src="../../Public/admin/images/main/logo.jpg" width="74" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">论坛后台管理</td>
        <td align="right" valign="top" id="header-right">
        	<a href="../logout.php" target="_parent" onFocus="this.blur()" class="admin-out">注销</a>
            <a href="../index.php" target="_parent" onFocus="this.blur()" class="admin-home">管理首页</a>
        	<a href="../../Home/index.php" target="_blank" onFocus="this.blur()" class="admin-index">网站首页</a>       	
            <span>
          <!-- 日历 -->
          <SCRIPT type=text/javascript src="../../public/admin/js/clock.js"></SCRIPT>
          <SCRIPT type=text/javascript>showcal();</SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" id="header-admin">神的论坛管理系统</td>
        <td align="left" valign="bottom" id="header-menu">
        <a href="./left.php" target="leftFrame" onFocus="this.blur()" id="menuon">网站配置</a>
		<a href="./leftUser.php" target="leftFrame" onFocus="this.blur()">用户管理</a>
        <a href="./leftType.php" target="leftFrame" onFocus="this.blur()">版块管理</a>
        <a href="./leftPost.php" target="leftFrame" onFocus="this.blur()">帖子管理</a>
        <a href="./leftConfig.php" target="leftFrame" onFocus="this.blur()">网站管理</a>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
