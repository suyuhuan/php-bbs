 <!doctype html>
<html>
    <head>
    	<?php include('../config/title.php');?>
        <title><?php echo $conf['title']?></title>
        <meta charset="utf-8"/>
        <?php include('../config/config.php');?>
        <link href="../../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/home/css/index.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/home/css/phpbbs.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>       
         <!--头部分-->
         <?php include("./header.php");?>
	    <!--搜索-->
		<div id="search">
			<div><img src="../../Public/home/image/index/search.png"/></div>
			<div>
				<form action='./phpbbs.php' method='get'>
				<input type="text" name="search" placeholder="让学习成为一种习惯"></input>
					<input type='hidden' name='tid' value="<?php echo $_GET['tid'];?>">
					<input type='hidden' name='tname' value="<?php echo $_GET['tname'];?>">
					<button type='submit'>帖子</butron>
					<button type='submit'>搜索</butron>
				</form>
			</div>
		</div>
		<?php
	       //获取传过来额tid，tname
	         $tid = $_GET['tid'];$tname=$_GET['tname']; 
		  
		        
		   ?>
		<!--导航-->
		<div id="menu">
			
			<div>
				<a href=""><img src="../../Public/home/image/list/home.gif"/></a>
				<a href="../index.php">LAMP兄弟连</a>
				<span>></span>
				<a href=""><?php echo $tname?></a>
				<span><img src="../../Public/home/image/list/rss.png"/></span>
			</div>
			<div>
				<a href="#">新帖</a>&nbsp;
				<a href="#">精华</a>
			</div>
		</div>
		<!--内容区-->
		<div id="content">
			<!--头部-->
			<div>
				<div>
			      <span><?php echo $tname?></span><img src="../../Public/home/image/list/wujiaoxi.png"/>
				</div>
			 <span>版主:&nbsp;<a href="">111</a></span>
			</div>
			<!--今日-->
			<div>
				<img src="../../Public/home/image/index/PHP.png"/>
				<div>
				<span>今日:<a href="">11</a>|</span>
				<span>主题:<a href="">10576</a>|</span>
				<span>帖数:<a href="">90987</a></span>
			    </div>
				<span>PHP基础编程、疑难解答、学习和开发过程中的经验总结等。</span>
			</div>
            <!--帖区-->
           <div class="tei">
	            <div>
	            	<span>标题</span>
	            	<span>
		            	<span>作者</span>
		            	<span>回复/阅读量</span>
		            	<span>最后发表</span>
	               </span>
	            </div>
	              <?php
	            if(isset($_GET['search'])){
		          $where = " where user.id=post.uid and tid={$tid} and title like '%{$_GET['search']}%' order by top desc,elite desc";
		          $url = "&search={$_GET['search']}";
		        }else{
		          $where ="where user.id=post.uid and tid={$tid} order by top desc,elite desc";
		          $url = "";
		        }
		        //分页
		         $page = 2;
                 $nowPage = isset($_GET['page'])?$_GET['page']:1;
                 $start = ($nowPage -1)*$page;
		        //连接数据库
		        mysql_connect('localhost','root','');
	            mysql_set_charset('utf8');
	            mysql_select_db('bbs');
	            $sql = "select post.* ,user.username from post,user {$where} limit {$start},{$page} ";
	            $rel = mysql_query($sql);
                 
	              while($array = mysql_fetch_assoc($rel)){
	              	?>
	           
	            <div class="hang">
	              <div>
	              	<?php
		              	 if(empty($array['elite']) && empty($array['top'])){
						        echo "<img src='../../Public/home/image/list/topicnew.gif'/>";
						    }else if($array['elite'] && $array['top']){
						        echo "<img src='../../Public/home/image/list/headtopic_3.gif'/>
						        <img src='../../Public/home/image/list/topichot.gif'/>";
						    }else if($array['elite'] && empty($array['top'])){
						        echo "<img src='../../Public/home/image/list/topichot.gif'/>";
						    }else if($array['top'] && empty($array['elite'])){
						        echo "<img src='../../Public/home/image/list/headtopic_3.gif'/>";
						    }
	              	?>
	              	<a href="./readbbs.php?id=<?php echo $array['id']?>&tname=<?php echo $tname ?>"><?php echo $array['title']?></a>
	              </div>
	              <div>
	            	<span>
	            		<span><?php echo $array['username']?></span><br/>
	            		<span><?php echo $array['time']?></span>
	            	</span>
	            	<span>
	            		<span>150</span>/<span><?php echo $array['count']?></span>
	            	</span>
	            	<span>
	            		<span>code</span><br/><span>昨天:16:00</span>
	            	</span>
	              </div>
	            </div>   
	            <?php 
	             }
	             ?>        
           </div>
            <?php
			       // 上一页
			       if($nowPage >1){
			        $prevPage = $nowPage-1;
			       }else{
			        $prevPage=1;
			       }
			       //下一页
			      $sql2 = "select count(*) as count from post where tid={$tid}";
			      $resl = mysql_query($sql2);
			      $totalCo = mysql_fetch_assoc($resl)['count'];

			      $totalPage = ceil($totalCo / $page);
			      if($nowPage < $totalPage){
			        $nextPage = $nowPage +1;
			      }else{
			        $nextPage = $totalPage;
			      }

            ?>
	        
           <!--底层分页-->
           <div id="page">
				<div id="page_left">
					<a href="./phpbbs.php?tid=<?php echo $tid?>&tname=<?php echo $tname?>&page=1">首页</a><span>总共&nbsp;<?php echo $totalCo ?>&nbsp;条数据</span>&nbsp;&nbsp;<span><?php echo $totalPage?>&nbsp;/&nbsp;<?php echo $nowPage?>页<span>
					<a href="./phpbbs.php?tid=<?php echo $tid?>&tname=<?php echo $tname?>&page=<?php echo $prevPage.$url; ?>"><img src="../../Public/home/image/list/jiantou_01.png"/>上一页</a>
					<a href="./phpbbs.php?tid=<?php echo $tid?>&tname=<?php echo $tname?>&page=<?php echo $nextPage.$url; ?>">下一页<img src="../../Public/home/image/list/jiantou_03.png"/></a>
					<a href="./phpbbs.php?tid=<?php echo $tid?>&tname=<?php echo $tname?>&page=<?php echo $totalPage.$url;?>">尾页</a>
				    
				</div>
				  <a class='button' href="./writebbs.php?tid=<?php echo $tid;?>&tname=<?php echo $tname;?>">发帖</a>
            </div>
              <?mysql_close();?>
        </div>
        <!--页尾-->
<?php include('../include/footer.php');?>