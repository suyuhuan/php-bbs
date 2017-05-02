<!doctype html>
<html>
	<head>
		<?php include('../config/title.php');?>
        <title><?php echo $conf['title']?></title>
		<meta charset="utf-8"/>
		<?php include('../config/config.php');?>
		<link href="../../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
		<link href="../../Public/home/css/index.css" rel="stylesheet" type="text/css"/>
		<link href="../../Public/home/css/readbbs.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<!--头部分-->
		<?php include('./header.php');?>
		
	    <!--搜索-->
		<div id="search">
			<?php  $id = $_GET['id']; $tname=$_GET['tname']?>
			<div><img src="../../Public/home/image/index/search.png"/></div>
			<div>
			<form action='./readbbs.php' post='get'>
				<input type="text" name="search" placeholder="让学习成为一种习惯"></input>
				<input type='hidden' name='id' value="<?php echo  $id ?>">
				<input type='hidden' name='tname' value="<?php echo  $tname ?>">
					<button>帖子</butron>
					<button>搜索</butron>
			</form>
			</div>
			
		</div>
		<!--导航-->
		<?php	   
            mysql_connect('localhost','root','');
	        mysql_set_charset('utf8');
	        mysql_select_db('bbs');
	        $sql = "select user.username,type.name,post.* from user,type,post where user.id=
                    post.uid and type.id=post.tid and post.id={$id};";
	        $rel = mysql_query($sql);
	        $array=mysql_fetch_assoc($rel);
	        $count="update post set count=count+1 where id={$id}";
	        mysql_query($count);
		?>
		<div id="menu">
			<div>
				<a href=""><img src="../../Public/home/image/list/home.gif"/></a>
				<a href="./phpbbs.php?tid=<?php echo $array['tid']?>&tname=<?php echo $_GET['tname']?>">LAMP兄弟连</a>
				<span>></span>
				<a href=""><?php echo $array['name']?></a>
				<span>></span>
				<a href=""><?php echo $array['title']?></a>
			</div>
		</div>
	
		<!--内容-->
		<div id="content">
			<!--头-->
			<div>
				<div>
					<span><a href=""><?php echo $array['count']?></a>阅读</span>
					<!-- <span><a href=""></a>回复</span> -->
				</div>
				<div>
				<span><a href=""><?php echo $array['title']?></a></span>
				<span><a href="">[复制链接]</a></span>
                </div>
                <div>
                	<a href=""><img src="../../Public/home/image/read/left.png"/></a>
                	<a href=""><img src="../../Public/home/image/read/right.png"/></a>
                	<input type="text"/>
                	<img src="../../Public/home/image/read/stairs.png"/>
                </div>
			</div>
			<!--内容区-->
			<div class="cont">
				<!--左边-->
				<div>
					 <span><img src="../../Public/home/image/read/xiaotu.png"/><?php echo $array['username']?></span>
					 	<div>
					 	<img src="../../Public/home/image/read/tou.jpg"/>
					    </div>
					 	<div>
					 		<span>连长</span>
					 		<img src="../../Public/home/image/read/10.gif"/>
					 		<span><img src="../../Public/home/image/read/shequjumin.png"/></span>
					 		<div>
					 			<a href=""><img src="../../Public/home/image/read/jia.png"/>加关注</a>
					 			<a href=""><img src="../../Public/home/image/read/fasong.png"/>发消息</a>
					 		</div>
					 	</div>
				</div>
				<!--右边-->
				<div>
					<!--头-->
				   <div>
					<span>楼主</span>
					<span>发表于:<?php echo $array['time']?></span>
					    <span>
							<a href="">只看楼主</a>
							<a href="">倒序阅读</a>
							<a href="">使用道具</a>
						</span>
					</div>
					<!--内容-->
					<div>
					    <div><?php echo $array['content']?></div>
					 
						<div>
							<a href=""><img src="../../Public/home/image/read/hui.png">&nbsp;0</a>
							<span>
								<a href="">分享到微信</a>
								<a href="">分享到QQ</a>
								<a href="">分享到QQ空间</a>
								<a href="">分享到微博</a>
							</span>
						</div>
					</div>
					<!--提示-->
					<span>
						<img src="../../Public/home/image/read/dengbao.png">附件设置隐藏，需要回复后才能看到!
					</span>
					<div>
						<span>兄弟连招贤令</span>
						<img src="../../Public/home/image/read/bi.png"/>
						<span>一群放肆的孩子</span>
					</div>
					<!--回复-->
					<div>
						<a href="">&nbsp;<img src="../../Public/home/image/read/huifu.png"/>回复</a>
						<span><a href="">举报</a><span>
					</div>
					<!--分享到-->
					<div>
						&nbsp;
						分享到>>
						<a href=""><img src="../../Public/home/image/read/taobao.png"/></a>
						<a href=""><img src="../../Public/home/image/read/weibo.png"/></a>
						<a href=""><img src="../../Public/home/image/read/boke.png"/></a>
						<a href=""><img src="../../Public/home/image/read/kongj.png"/></a>
						<a href=""><img src="../../Public/home/image/read/kaixin.png"/></a>
						<a href=""><img src="../../Public/home/image/read/renr.png"/></a>
						<a href=""><img src="../../Public/home/image/read/doub.png"/></a>
						<a href=""><img src="../../Public/home/image/read/wangy.png"/></a>
						<a href=""><img src="../../Public/home/image/read/baidu.png"/></a>
						<a href=""><img src="../../Public/home/image/read/taoz.png"/></a>
						<a href=""><img src="../../Public/home/image/read/bai.png"/></a>
						<a href=""><img src="../../Public/home/image/read/fei.png"/></a>
					</div>
				</div>	
				<div class="clear"></div>
			</div>
			<!--内容二-->
			<?php
			  date_default_timezone_set('PRC');
              //搜索
			  if(isset($_GET['search'])){
		          $where = "where pid={$array['id']} and content like '%{$_GET['search']}%'";
		          $url = "&search={$_GET['search']}";
		        }else{
		          $where ="where pid={$array['id']}";
		          $url = "";
		        }
		        //分页
		        $page = 1;
		        $nowPage = isset($_GET['page'])?$_GET['page']:1;
		        $start = ($nowPage -1)*$page;

			  $sql2 = "select * from reply {$where} limit {$start},{$page}";
			  $rel =mysql_query($sql2);
			  $num=0;
			  while($arr = mysql_fetch_assoc($rel)){  
			  $sql3 = "select * from userdetail where id={$arr['uid']}";
			  $user = mysql_fetch_assoc(mysql_query($sql3));   
			  $num++;
				switch($num){
				    case 1:	$lo='沙发';break;
				    case 2: $lo= '板凳';break;
				    case 3: $lo= '地板';break;
				    case 4: $lo= '下水道';break;
				   case  5:  $lo='阎罗殿';break;
				  default:  $lo=$num.'楼';break; }  
			?>
			<div class="cont">
				<!--左边-->
				<div>
					 <span><img src="../../Public/home/image/read/xiaotu.png"/><?php echo $user['name']?></span>
					 	<div>
					 	<img src="../../public/upload/head/<?php echo $user['photo'];?>"/>
					    </div>
					 	<div>
					 		<span><?php echo cort($user['score'])?></span>
					 		<img src="../../Public/home/image/read/10.gif"/>
					 		<span><img src="../../Public/home/image/read/shequjumin.png"/></span>
					 		<div>
					 			<a href=""><img src="../../Public/home/image/read/jia.png"/>加关注</a>
					 			<a href=""><img src="../../Public/home/image/read/fasong.png"/>发消息</a>
					 		</div>
					 	</div>
				</div>
				<!--右边-->
				<div>
					<!--头-->
				   <div>
					<span><?php echo $lo;?></span>
					<span>发表于:<?php echo date('Y-m-d H:s:i',$arr['time']);?></span>
					    <span>
							<a href="">只看该作者</a>
						</span>
					</div>
					<!--内容-->
					<div>
						<div><?php echo $arr['content'];?></div>
					</div>
					<div>
						<span>兄弟连招贤令</span>
					</div>
					<!--回复-->
					<div>
						<a href="">&nbsp;<img src="../../Public/home/image/read/huifu.png"/>回复</a>
						<span><a href="">举报</a><span>
					</div>
				</div>	
				<div class="clear"></div>
			</div>
			<?php
		   }?>
		</div>
		<div class="clear"></div>

		<!--分页-->
		<?php
		if($nowPage > 1){
            $prevPage = $nowPage -1;
        }else{
            $prevPage = 1;
        }
        //控制下一页
        $SQL1 =  "select count(*) as count from reply where pid={$array['id']}";
        $result1 = mysql_query($SQL1);//执行查询总共有多少条数据
        $totalCo = mysql_fetch_assoc($result1)['count'];//总共有多少条数据

        $totalPage =  ceil($totalCo / $page);//获得总共有多少页
        if($nowPage < $totalPage){
            $nextPage = $nowPage + 1;
        }else{
            $nextPage = $totalPage;//如果大于等于总共的页数就让他等于总页数
        }

		?>
		<div id="page">
				<div id="page_left">
					<a href="./readbbs.php?page=1">首页</a><span>总共&nbsp;<?php echo $totalCo ?>&nbsp;条数据</span>&nbsp;&nbsp;<span><?php echo $totalPage?>&nbsp;/&nbsp;<?php echo $nowPage?>页<span>
					<a href="./readbbs.php?id=<?php echo $id?>&tname=<?php echo $tname?>&page=<?php echo $prevPage.$url?>"><img src="../../Public/home/image/list/jiantou_01.png"/>上一页</a>
					<a href="./readbbs.php?id=<?php echo $id?>&tname=<?php echo $tname?>&page=<?php echo $nextPage.$url?>">下一页<img src="../../Public/home/image/list/jiantou_03.png"/></a>
					<a href="./readbbs.php?id=<?php echo $id?>&&tname=<?php echo $tname?>&page=<?php echo $totalPage.$url?>">尾页</a>
				</div>
				   <a class='button' href="./writebbs.php?tid=<?php echo $array['tid']?>&tname=<?php echo $tname?>">发帖</a>
            </div>
		<!--快速回复-->
		<div id="reply">
			<div>
				<img src="../../Public/home/image/index/content_l.png"/>
				<span>快速回复</span>
			</div>
			<!--内容部分二-->
			<div>
				<div>
					<img src="../../Public/home/image/read/none.gif"/>
				</div>
				<!--右边二-->	
				<form action='doReadBbs.php' method='post'>				
				<div>

				   <div>
                    <input type="text" name="" placeholder="Re:php编辑器兼容各种浏览器(ie 火狐)"/>
                    <span>如果您在写长篇帖子又不马上发表，建议存为草稿</span>
                         <?php 
                          if(isset($_SESSION['userDetail']['flag']) || isset($_COOKIE['flag'])){                           
                         ?>
                            <textarea name='content'></textarea>
                         <?php
                          }else{
                         ?>                      
	                    <div style='margin:80px 140px;'>
	                      你目前还是游客，请<a href="">登录</a>或者<a href="../login/register.php">注册</a>
	                    </div>
	                    <?php }?>
                    </div>           
                   <!--右边表情区-->
                   <div>
                   	 <div>
                   	 	<a href=""><img src="../../Public/home/image/read/left.png"/></a>
                   	 	<span><a href="">炮兵1</a></span>
                   	 	<span><a href="">经典</a></span>
                   	 	<span><a href="">炮兵2</a></span>
                   	 	<a href=""><img src="../../Public/home/image/read/right.png"/></a>
                   	 </div>
                   	 <div>
                   	 	 <div>
                   	 	 	<img src="../../Public/home/image/read/icon8.gif">
                   	 	 	<img src="../../Public/home/image/read/icon9.gif">
                   	 	 	<img src="../../Public/home/image/read/icon2.gif">
                   	 	 	<img src="../../Public/home/image/read/time.gif">
                   	 	 </div>
                   	 	 <div>
                   	 	 	<img src="../../Public/home/image/read/kiss.gif">
                   	 	 	<img src="../../Public/home/image/read/icon6.gif">
                   	 	 	<img src="../../Public/home/image/read/victory.gif">
                   	 	 	<img src="../../Public/home/image/read/icon3.gif">
                   	 	 </div>
                   	 	 <div>
                   	 	 	<img src="../../Public/home/image/read/call.gif">
                   	 	 	<img src="../../Public/home/image/read/curse.gif">
                   	 	 	<img src="../../Public/home/image/read/icon1.gif">
                   	 	 	<img src="../../Public/home/image/read/icon5.gif">
                   	 	 </div>
                   	 	 <div>
                   	 	 	<img src="../../Public/home/image/read/tupi.gif">
                   	 	 	<img src="../../Public/home/image/read/icon7.gif">
                   	 	 	<img src="../../Public/home/image/read/dizzy.gif">
                   	 	 	<img src="../../Public/home/image/read/handshake.gif">
                   	 	 </div>
                   	 	 <div>
                   	 	 	<span><a href="">1</a></span>
                   	 	 	<span><a href="">2</a></span>
                   	 	 	<span><a href="">3</a></span>
                   	 	 </div>
                   	 </div>
                   </div>

                   <div>
                   	<input type='hidden' name='id' value="<?php echo $id?>">
                   	<input type='hidden' name='tname' value="<?php echo $tname?>">
                   	<input type='hidden' name='uid' value="<?php echo $userDetail['id']?>">
                   	<input type='hidden' name='pid' value="<?php echo $array['id']?>">
                   	<button>发布</button>
                   </div> 

				</div>
			  </form>
			</div>
		</div>
	    <?php mysql_close();?>
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