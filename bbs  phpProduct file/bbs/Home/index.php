<?php
  header('content-type:text/html;charset=utf-8');
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql = 'select * from conf';
  $conf = mysql_fetch_assoc(mysql_query($sql));
  if($conf['close']==1){
    echo "网站维护中，请稍等！！";
    exit;
  }
?>
<!doctype html>
<html>
    <head>
        <title><?php echo $conf['title']?></title>
        <meta charset="utf-8"/>
        <?php include('./config/config.php');?>
        <link href="./../Public/home/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="./../public/home/css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <!--头部分-->
		<?php  include('./include/header.php'); ?>
	    <!--搜索-->
		<div id="search">
			<div><img src="./../Public/home/image/index/search.png"/></div>
			<div>
				<input type="text" name="search" placeholder="让学习成为一种习惯"></input>
					<button>帖子</butron>
					<button>搜索</butron>
			</div>
			
		</div>
		<!--广告区-->
        <div id="banner">
             <div class='.banner'>
                <ul>
                    <li>
                 	   <img src="./../Public/home/image/index/banner1.jpg"/>
                    </li>
              </ul>
             </div>
            <div>
             	<div>
             		<img src="./../Public/home/image/index/banner2_1.jpg"/>
             	</div>
             	<div>
             		<img src="./../Public/home/image/index/banner2_2.png"/>
             	</div>
            </div>
            <div>
             	<div>
             		<img src="./../Public/home/image/index/banner3_1.png"/>
             	</div>
             	<div>
             		<img src="./../Public/home/image/index/banner3_2.png"/>
             	</div>
             </div>
        </div>
        <!--公告区-->
        <div id="advert">
        	<div>
        		<span><img src="./../Public/home/image/index/anc.gif"/></span>
        		<a href="#" class="a">兄弟连视频教程免费下载地址汇总</a>
        		<a href="#">兄弟连&GMGC手游学院成立</a>
        		<a href="#">ios应用软件开发实战在线课</a>
        	</div>
        	<div>
        		<div>
	        		<span>今天：<a href="#">146</a>|</span>
	        		<span>昨日：<a href="#">435</a>|</span>
                    <span>最高日：<a href="#">14435</a>|</span>
                    <span>帖子：<a href="#">14633442</a>|</span>
                    <span>会员：<a href="#">4353423</a>|</span>
                    <span>新会员：<a href="#">jjab14435</a></span>
	        		
        		</div>
        		
                <div>
                	<a href="#">新帖</a><a href="#">精华</a>
                </div>
        	</div>
        </div>
        <div class="clear"></div>
        <!--内容区-->
         <div id="content">
            <?php
               mysql_connect('localhost','root','');
               mysql_set_charset('utf8');
               mysql_select_db('bbs');
               $sql = "select id,name from type where pid=0";
               $rel = mysql_query($sql);
               while($type=mysql_fetch_assoc($rel)){

            ?>
              <div class="column">
                <h2>:::.<?php echo $type['name']?>.:::</h2>
                <div>
                    <?php 
                      $sql2 = "select * from type where pid={$type['id']}";
                      $resl = mysql_query($sql2);
                      while($subType = mysql_fetch_assoc($resl)){
                    ?>
                    <div>
                        <a href="#">
                            <img src="../public/home/image/index/PHP.png" />
                        </a>
                        <div>
                            <a href="#">
                                <h3>
                                    <a href="./cont/phpbbs.php?tid=<?php echo $subType['id']?>&tname=<?php echo $subType['name']?>">
                                     <?php echo $subType['name']?>
                                   </a>
                               </h3>
                            </a>
                        </div>
                        <span>
                            <strong>主题</strong>
                            <b>10598</b>
                        </span>
                        <span>
                            <strong>帖子</strong>
                            <b>91136</b>
                        </span>
                        <span>
                            最后发帖:2015-08-21 22:22:22
                        </span>
                    </div>
                     <?php } ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php } ?>

         </div>
                  
        <!--友情链接-->
        <div id="link">
        	<!--第一块-->
        	 <div class="chead">
        	   <div>
        		<img src="./../Public/home/image/index/content_l.png"/>
				<a href ="">友情链接</a>
			   </div>
             </div>

	     <!--第二块-->
	        <div>
	        	<div><img src="./../Public/home/image/index/link.gif"/>
                </div>
              <div>
                <?php
                 $sql ="select * from link";
                 $rel = mysql_query($sql);
                 while($link = mysql_fetch_assoc($rel)){

                   echo "<a href=".$link['link'].">{$link['name']}</a>";
                }
                ?>

                
              </div>
	        </div>
        </div>
        <!--用户-->
       <div id="user">
       	   <!--第一块-->
        	 <div class="chead">
        	   <div>
        		<img src="./../Public/home/image/index/content_l.png"/>
				<a href ="#">在线用户</a>-
				<span>共2084人在线53位会员,2031位访客,最多4931人发生在2015-07-31 05:47</span>
			   </div>
             </div>

        <!--第二块-->
             <div>
	            <span>
	            	<img src="./../Public/home/image/index/shili.gif"/><a href="#">司令(管理员)</a>
	            </span>
	            <span>
	            	<img src="./../Public/home/image/index/lianz.gif"/><a href="#">连长(超版)</a>
	            </span>
	            <span>
	            	<img src="./../Public/home/image/index/paiz.gif"/><a href="#">排长(版主)</a>
	            </span>
	            <span>
	            	<img src="./../Public/home/image/index/jiaog.gif"/><a href="#">教官</a>
	            </span>
	            <span>
	            	<img src="./../Public/home/image/index/xinb.gif"/><a href="#">新兵</a>
	            </span>
	            <span>
	            	<img src="./../Public/home/image/index/puto.gif"/><a href="#">普通会员</a>
	            </span>
	            <span>
	            	<a href="#">[打开在线列表]</a>
	            </span>
             </div>
       </div>
       <?php mysql_close();?>
        <?php include('./include/footer.php');?>
