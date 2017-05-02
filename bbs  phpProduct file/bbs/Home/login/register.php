<!doctype html>
<html>
	<head>
		<?php include('../config/title.php');?>
        <title><?php echo $conf['title']?></title>
		<meta charset="utf-8"/>
		<?php include('../config/config.php');?>
     	<link href="../../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
		<link href="../../Public/home/css/login.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	   <div id="header">
	   	 <div><img src="../../Public/home/image/index/logo.png"></div>
	     <div><img src="../../Public/home/image/index/wxdbjc.gif"></div>
	  </div>
	  <hr/>
	   <div id="content">
	   	 <!--第一提示信息-->
	   	  <div>
	   	  	<span>用户注册</span>
	   	  </div>
	   	  <!--第二个-->
	   	  <div>
	   	     <!--左边-->
	   	     <div>
	   	     	<!--警告-->
	   	  		<div>
	   	  			<div>
	   	  			<img src="../../Public/home/image/index/zhuyi.png"/>
	   	  			</div>
	   	  			<div>
	   	  		    <span>1、用户组权限:你所属的用户组没有发表回复的权限!</span>
	   	  			<span>2、您还不是站点会员,请先登录站点</span>
	   	  		   </div> 
	   	  		</div>
	   	  		<!--表单-->
		   	  	<div>
		   	  		<form action='./doRegister.php' method='post'>
		   	  		   <table>
		   	  		   	   <tr>
		   	  		   	   	 <td>用户名:</td>
		   	  		   	   	 <td><input type='text' name='username'/></td>
		   	  		   	   </tr>
		   	  		   	   <tr>
		   	  		   	   	 <td>密码:</td>
		   	  		   	   	 <td><input type='password' name='password'/></td>
		   	  		   	   </tr>
		   	  		   	   <tr>
		   	  		   	     <td>确认密码:</td>
		   	  		   	     <td><input type='password' name='repassword'/></td>
		   	  		   	   </tr>
		   	  		   	   <tr>
		   	  		   	   	  <td>验证码:</td>
		   	  		   	   	  <td><input style='width:70px;height:25px;' type='text' name='code'/>
		   	  		   	   	  	<img style="width:75px;height:35px;position:relative;top:12px;" src="../../Public/code.php" /></td>
		   	  		   	   </tr>
		   	  		   	   <tr>
		   	  		   	   	<td></td>
		   	  		   	   	 <td><input type='submit' value='确认注册'></td>
		   	  		   	   </tr>
		   	  		   </table>
		   	  		</form>
		   	  	</div>
	   	     </div>
	   	     <!--右边-->
	   	  	<div>
	   	  	 	 <div>
	   	  	 	 	<div>有账号？</div>
	   	  	 	 	<div><a href='./login.php'><input type="button" value="登陆"></a></div>
	   	  	 	 </div>
	   	  	     <div><a href="#">返回继续操作</a>或者<a href="../index.php">返回首页</a></div>
	   	  	</div>
	   	  </div>
	   	  
	   </div>
	</body>
</html>