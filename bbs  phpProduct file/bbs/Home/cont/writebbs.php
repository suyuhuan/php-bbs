<!doctype html>
<html>
	<head>
		<?php include('../config/title.php');?>
        <title><?php echo $conf['title']?></title>
		<meta charset="utf-8"/>
		 <?php include('../config/config.php');?>
		<link href="../../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
		<link href="../../Public/home/css/index.css" rel="stylesheet" type="text/css"/>
		<link href="../../Public/home/css/writebbs.css" rel="stylesheet" type="text/css"/>


		<link rel="stylesheet" type="text/css" href="../../public/editor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="../../public/editor/styles/simditor.css" />
        <link rel="stylesheet" type="text/css" href="../../public/editor/styles/simditor-emoji.css" />

        <script type="text/javascript" src="../../public/editor/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="../../public/editor/scripts/module.js"></script>
        <script type="text/javascript" src="../../public/editor/scripts/uploader.js"></script>
        <script type="text/javascript" src="../../public/editor/scripts/simditor.js"></script>
        <script type="text/javascript" src="../../public/editor/scripts/simditor-emoji.js"></script>
		
        <script type="text/javascript" src="../../public/editor/scripts/config.js"></script>
	</head>
	<body>
		<!--头部分-->
		<?php include('./header.php');?>
		
	    <!--搜索-->
		<div id="search">
			<div><img src="../../Public/home/image/index/search.png"/></div>
			<div>
				<input type="text" name="search" placeholder="让学习成为一种习惯"></input>
					<button>帖子</butron>
					<button>搜索</butron>
			</div>
		</div>
		<!--导航-->
		<div id="menu">
			<?php $tid=$_GET['tid'];$tname=$_GET['tname'];?>
			<div>
				<a href=""><img src="../../Public/home/image/list/home.gif"/></a>
				<a href="">LAMP兄弟连</a>
				<span>></span>
				<a href=""><?php echo $tname;?></a>
			</div>
		</div>
		
		<!--内容-->
		<div id="content">
			<!--头-->
			<div>
				<h3>分类:<?php echo $tname;?></h3>
				<form action='./doWriteBbs.php' method='post'>
				 <p>标题:<input type='text' name='title'></p>
			     <textarea id="editor" placeholder="这里输入内容" autofocus name='content'></textarea>
			    <input type='hidden' value="<?php echo $tid;?>" name='tid'/>
			    <input type='hidden' value="<?php echo $tname;?>" name='tname'/>
			    <input type='hidden' value="<?php echo $userDetail['id'];?>" name='uid'/>
			    <input type='submit' value='发表' />
		       </form>
		   </div>
			
			
	    </div>
		<!--页尾-->
		<?php include('../include/footer.php');?>
		<!-- <div id="footer">
	        	<div> 
	        	   <a href="">联系我们</a><span>|</span>
	        	  <a href="">无图版</a><span>|</span>
	        	  <a href="">手机浏览</a><span>|</span>
	        	  <a href="">清除Cookies</a>
	        	</div>
	        	<p>Powered by phpwind v8.7 Certificate Copyright Time now is:07-30 18:19</p>
	        	<p>&#169;2006-2015 LAMP兄弟连 版权所有Gzip disabled 京ICP备11018117号Total0.035433(s)query3,<img src="image/index/pic.gif">京公网安备11012020202</p>
        </div> -->
	</body>
</html>