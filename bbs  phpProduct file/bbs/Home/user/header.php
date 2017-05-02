
<!--头部分-->
		<div id="header">
			<!--第一块-->
			<div>
			 <div>
				<div>
					<a href="#">设为首页</a>
					<a href="#">收藏LAMP兄弟连</a>
				</div>
				<div>
					<a href="#">|帮助</a>
					<a href="#">推广链接</a>
					<a href="#">社区应用</a>
					<a href="#">最新帖子</a>
					<a href="#">精华区</a>
					<a href="#">社区服务</a>
					<a href="#">会员列表</a>
					<a href="#">统计排行</a>
					<a href="#">搜索</a>
				</div>
			 </div>
			</div>
            <!--第二块-->
			<div>
			   <div>	   
				<div>
					<?php
					 mysql_connect('localhost','root','');
					 mysql_set_charset('utf8');
					 mysql_select_db('bbs');
					 $sql = "select * from conf";
					  $sql2 = "select * from banner";
					 $nav = mysql_fetch_assoc(mysql_query($sql2));
					 $conf = mysql_fetch_assoc(mysql_query($sql));

					?>
					<img src="../../Public/upload/logo/<?php echo $conf['image']?>"/>
				</div>
				<div>
					<img src="../../Public/home/image/index/wxdbjc.gif">
				</div>
				<div>
			     <?php
			     include "../../public/func.php";
			     header('content-type:text/html;charset=utf-8');
                  session_start();
                  if(isset($_SESSION['userDetail']['flag'])){
                  	$userDetail['id']=$_SESSION['userDetail']['id'];
                  	$userDetail['username']=$_SESSION['userDetail']['username'];
                  	$userDetail['name']=$_SESSION['userDetail']['name'];
                  	$userDetail['score']=$_SESSION['userDetail']['score'];
                  	$userDetail['qq']=$_SESSION['userDetail']['qq'];
                  	$userDetail['email']=$_SESSION['userDetail']['email'];
                  	$userDetail['photo']=$_SESSION['userDetail']['photo'];
                  	$userDetail['infos']=$_SESSION['userDetail']['infos'];
                  	$userDetail['flag']=$_SESSION['userDetail']['flag'];
                  }elseif(isset($_COOKIE['flag'])){
                  	$userDetail['id'] = $_COOKIE['id'];
                  	$userDetail['username'] = $_COOKIE['username'];
                  	$userDetail['name'] = $_COOKIE['name'];
                  	$userDetail['score'] = $_COOKIE['score'];
                  	$userDetail['qq'] = $_COOKIE['qq'];
                  	$userDetail['email'] = $_COOKIE['email'];
                  	$userDetail['photo'] = $_COOKIE['photo'];
                  	$userDetail['infos'] = $_COOKIE['infos'];
                  	$userDetail['flag'] = $_COOKIE['flag'];
                  }
       
			          if(isset($_SESSION['userDetail']['flag']) || isset($_COOKIE['flag'])){
					      ?>
					      <div id="login">
									<a href="#" class="tu">
										<img src="../../public/upload/head/<?php echo $userDetail['photo'];?>"/>
									</a>
									<div class="left">
										<div class="top">
											<a href="./user.php" class="t">设置</a>
											<em  class="t">|</em>
											<a href="../login/loginout.php"  class="t">退出</a>
											<span><a href="./showUser.php"><?php echo $userDetail['name']?></a></span>
										</div>
										<div class="bottom">
											<span>
												身份：<a href="#"><?php?></a>
											</span>
											<span>
												粮票：<a href="#"><?php echo $userDetail['score']?></a>
											</span>
										</div>
									</div>
								</div>
					      <?php  
					    }else{	
					       ?> 
					<form action="../login/doLogin.php" method="post">
					   <div>
						<input type="text" name="username" placeholder="请输入用户名"/>
						<input type="checkbox" name="rember">记住登录
						<a href="#">找回密码</a>
					   </div>
					<div>
					    <input type="password" name="password"/>
					    <button>登陆</button>
					    <a href="../login/register.php"><input type="button" value='注册'></a>
					</div>
				  </form>
                  <?php 
			       }
                ?>
				</div>
			  </div>
			</div>
			<!--第三块-->
			<div>
				<div>
					<div>
					  <a href="./index.php"><?php echo $nav['tit1']?></a>
					  <a href="#"><?php echo $nav['tit2']?></a>
					  <a href="#"><?php echo $nav['tit3']?></a>
					  <a href="#"><?php echo $nav['tit4']?></a>	
					  <a href="#"><?php echo $nav['tit5']?></a>
					  <a href="#"><?php echo $nav['tit6']?></a>
					</div>
					<div>
					   <select>
					   	    <option>快速通道</option>
					   </select>
					</div>
				</div>
			</div>
		 </div>
	