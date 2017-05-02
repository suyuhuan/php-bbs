<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="../../public/admin/images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(../../public/admin/images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(../../public/admin/images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(../../public/admin/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
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
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="get" action="./userList.php">
	         <span>管理员：</span>
	         <input type="text" name="search" value="" class="text-word">
	         <input name="" type="submit" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;">
          <a href="./addUser.php" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">管理帐号</th>
        <th align="center" valign="middle" class="borderright">权限</th>
        <th align="center" valign="middle" class="borderright">锁定</th>
        <th align="center" valign="middle" class="borderright">最后登录</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php
        //搜索
        if(isset($_GET['search'])){
          $where = "where username like '%{$_GET['search']}%'";
          $url = "&search={$_GET['search']}";
        }else{
          $where ="";
          $url = "";
        }
        //分页
        $page = 3;
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        $start = ($nowPage -1)*$page;

         mysql_connect('localhost','root','');
         mysql_set_charset('utf8');
         mysql_select_db('bbs');
         $auth = array(0=>'普通用户',1=>'管理员');
         $status = array(0=>'禁用',1=>'已启用');
         $sql = "select * from user {$where} limit {$start},{$page}";
         $rel = mysql_query($sql);
        while($array=mysql_fetch_assoc($rel)){
          
         ?>
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $array['id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom">
          <a href="./showAddUpUser.php?id=<?php echo $array['id']?>&username=<?php echo $array['username']?>"><?php echo $array['username']?></a></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $array['auth']?$auth['1']:$auth['0']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $array['status']?$status['1']:$status['0'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom">2015-09-13 10:06:20</td>
        <td align="center" valign="middle" class="borderbottom">
        <a href="./updateUser.php?id=<?php echo $array['id']?>&username=<?php echo $array['username']?>" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./delUser.php?id=<?php echo $array['id']?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./stopUser.php?id=<?php echo $array['id']?>&status=<?php echo $array['status']?>" target="mainFrame" onFocus="this.blur()" class="add"><?php echo $array['status']?$status['0']:$status['1'];?></a></td>
      </tr>
<?php
} 
    ?>
    </table></td>
    </tr>
  <tr>
    <?php
       if($nowPage > 1){
            $prevPage = $nowPage -1;
        }else{
            $prevPage = 1;
        }
        //控制下一页
        $SQL1 =  "select count(*) as count from user {$where}";
        $result1 = mysql_query($SQL1);//执行查询总共有多少条数据
        $totalCo = mysql_fetch_assoc($result1)['count'];//总共有多少条数据

        $totalPage =  ceil($totalCo / $page);//获得总共有多少页
        if($nowPage < $totalPage){
            $nextPage = $nowPage + 1;
        }else{
            $nextPage = $totalPage;//如果大于等于总共的页数就让他等于总页数
        }
    echo"<td align='left' valign='top' class='fenye'>$totalCo 条数据 $totalPage/$nowPage 页&nbsp;&nbsp;
    <a href='./userList.php?page=1' target='mainFrame' onFocus='this.blur()'>首页</a>&nbsp;&nbsp;
    <a href='./userList.php?page={$prevPage}{$url}' target='mainFrame' onFocus='this.blur()'>上一页</a>&nbsp;&nbsp;
    <a href='./userList.php?page={$nextPage}{$url}' target='mainFrame' onFocus='this.blur()'>下一页</a>&nbsp;&nbsp;
    <a href='./userList.php?page={$totalPage}{$url}' target='mainFrame' onFocus='this.blur()'>尾页</a></td>";
    mysql_close();
  ?>
  </tr>
</table>
</body>
</html>