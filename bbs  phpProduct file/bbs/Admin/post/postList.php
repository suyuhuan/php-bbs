<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="../../Public/admin/images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(../../Public/admin/images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(../../Public/admin/images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(../../Public/admin/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
  <?php $name = $_GET['name'];$tid = $_GET['id'];?>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：<?php echo $name;?></td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="get" action="./postList.php">
	         <span>帖子名：</span>
	         <input type="text" name="search" value="" class="text-word">
           <input type='hidden' name="name" value="<?php echo $name;?>"/>
           <input type='hidden' name="id" value="<?php echo $tid;?>"/>
	         <input name="" type="submit" value="查询" class="text-but">
	         </form>
         </td>
  		 <!-- <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="./addUser.php" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>-->
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">主题</th>
        <th align="center" valign="middle" class="borderright">发帖人</th>
        <th align="center" valign="middle" class="borderright">发表时间</th>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php
         
      //搜索
      if(isset($_GET['search'])){
        $where = "where recycle=0  and  tid={$tid} and  title like '%{$_GET['search']}%'";
        $url = "&search ={$_GET['search']}";
      }else{
        $where = "where  recycle=0  and tid={$tid}";
        $url = "";
      }
      //分页
      $page = 3;
      $nowPage = isset($_GET['page'])?$_GET['page']:1;
      $start = ($nowPage -1)*$page;



         
         mysql_connect('localhost','root','');
         mysql_set_charset('utf8');
         mysql_select_db('bbs');
         $elite=array(0=>'普通',1=>'精华');
         $top = array(0=>'普通',1=>'置顶');
         $sql = "select * from post {$where} limit {$start},{$page} ";
         $rel = mysql_query($sql);
         while($array=mysql_fetch_assoc($rel)){
      ?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $array['id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $array['title'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo date('Y-m-d H:i:s',$array['time']);?></td>
        <td align="center" valign="middle" class="borderright borderbottom">
          <?php echo $array['elite']?$elite['1']:$elite['0'];?> 、<?php echo $array['top']?$top['1']:$top['0'];?>
        </td>
        <td align="center" valign="middle" class="borderbottom">
          <a href="./viewPost.php?id=<?php echo $array['id'];?>&name=<?php echo $name?>&tid=<?php echo $tid;?>" target="mainFrame" onFocus="this.blur()" class="add">查看帖子</a>
          <span class="gray">&nbsp;|&nbsp;</span>
          <a href="./updatePost.php?id=<?php echo $array['id'];?>" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
          <span class="gray">&nbsp;|&nbsp;</span>  
          <a href="./doTrashPost.php?id=<?php echo $array['id'];?>&tid=<?php echo $tid;?>&name=<?php echo $name?>" target="mainFrame" onFocus="this.blur()" class="add">放入回收站</a>
          <span class="gray">&nbsp;|&nbsp;</span>
          <a href="doElite.php?elite=<?php echo $array['elite'];?>&id=<?php echo $array['id'];?>&tid=<?php echo $tid;?>&name=<?php echo $name?>" target="mainFrame" onFocus="this.blur()" class="add">
            <?php echo $array['elite']?$elite['0']:$elite['1'];?>
          </a>
          <span class="gray">&nbsp;|&nbsp;</span>
          <a href="doTop.php?top=<?php echo $array['top'];?>&id=<?php echo $array['id'];?>&tid=<?php echo $tid;?>&name=<?php echo $name?>" target="mainFrame" onFocus="this.blur()" class="add">
            <?php echo $array['top']?$top['0']:$top['1'];?>
          </a>
          <span class="gray">&nbsp;|&nbsp;</span>
          <a href="../reply/replyList.php?id=<?php echo $array['id'];?>&name=<?php echo $name?>&tid=<?php echo $tid;?>" target="mainFrame" onFocus="this.blur()" class="add">管理回复</a>
          <span class="gray">&nbsp;|&nbsp;</span>
          <a href="./delPost.php?id=<?php echo $array['id'];?>&tid=<?php echo $tid;?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
        </td>
      </tr>
      <?php }?>
    </table></td>
    </tr>
  <?php
      // 上一页
       if($nowPage >1){
        $prevPage = $nowPage-1;
       }else{
        $prevPage=1;
       }
       //下一页
      $sql2 = "select count(*) as count from post where tid={$tid} and recycle=0 ";
      $resl = mysql_query($sql2);
      $totalCo = mysql_fetch_assoc($resl)['count'];

      $totalPage = ceil($totalCo / $page);
      if($nowPage < $totalPage){
        $nextPage = $nowPage +1;
      }else{
        $nextPage = $totalPage;
      }

    ?>
  <tr>
    <td align="left" valign="top" class="fenye"><?php echo $totalCo;?> 条数据 <?php echo $totalPage;?>/<?php echo $nowPage?> 页&nbsp;&nbsp;
      <a href="./postList.php?id=<?php echo $tid; ?>&name=<?php echo $name;?>&page=1" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
      <a href="./postList.php?id=<?php echo $tid; ?>&name=<?php echo $name;?>&page=<?php echo $prevPage.$url?>" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
      <a href="./postList.php?id=<?php echo $tid; ?>&name=<?php echo $name;?>&page=<?php echo $nextPage.$url?>" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
      <a href="./postList.php?id=<?php echo $tid; ?>&name=<?php echo $name;?>&page=<?php echo $totalPage.$url?>" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</body>
<?php mysql_close();?>
</html>
