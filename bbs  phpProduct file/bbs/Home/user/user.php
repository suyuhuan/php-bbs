 <!doctype html>
<html>
    <head>
        <?php include('../config/title.php');?>
        <title><?php echo $conf['title']?></title>
        <meta charset="utf-8"/>
       <?php include('../config/config.php');?>
        <link href="../../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/home/css/index.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/home/css/user.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>       
         <!--头部分-->
         <?php include('./header.php');?>
	    <!--搜索-->
		
		<!--导航-->
		<div id="menu">
			<div>
				<a href=""><img src="../../Public/home/image/list/home.gif"/></a>
				<a href="">LAMP兄弟连</a>
				<span>></span>
				<a href="">个人中心</a>
			</div>		
		</div>
		<!--内容区-->
		<div id="content">
			<div class='left'>
				<ul>
				<li><a href='./user.php'>修改信息</a></li>
				<li><a href='./userpass.php'>修改密码</a></li>
				<li><a href='./userimge.php'>修改头像</a></li>
				</ul>
			</div>
			<div class='right'>
				  <table>
			       <form action="./doUser.php" method="post">
			    
			      	<tr>
			      		<td>昵&nbsp;&nbsp;称:&nbsp;&nbsp;</td>
                        <td><input type="text" name="name" value="<?php echo $userDetail['name'];?>"></td>
				   </tr>
				   <tr>
			      		<td>邮&nbsp;&nbsp;箱:&nbsp;&nbsp;</td>
                        <td><input type="text" name="email" value="<?php echo $userDetail['email'];?>"></td>
				   </tr>
				   <tr>
			      		<td>&nbsp;Q&nbsp;&nbsp;Q:&nbsp;</td>
                        <td><input type="text" name="qq" value="<?php echo $userDetail['qq'];?>"></td>
				   </tr>			      
				   	<tr>
			      		<td>个性签名:&nbsp;&nbsp;</td>
                        <td>
						   <textarea name='infos' rows='4' clos='10'><?php echo $userDetail['infos'];?></textarea>
						</td>
				   </tr>
				   <tr>
			      		<td></td>
			      		<input type='hidden' value="<?php echo $userDetail['id'];?>" name='id'/>
                        <td><input type='submit' value="确定"/>
				   </tr>
				   
				</form>
			    </table>
			</div>
        </div>
        <!--页尾-->
<?php include('../include/footer.php');?>