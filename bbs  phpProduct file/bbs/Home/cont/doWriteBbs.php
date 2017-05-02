<?php
header('content-type:text/html;charset=utf-8');
$uid = $_POST['uid'];
$tid = $_POST['tid'];
$tname = $_POST['tname'];
$title = $_POST['title'];
$content = $_POST['content'];
$time = time();


mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');
$sql = "insert into post(uid,tid,title,content,time) values({$uid},{$tid},'{$title}','{$content}',{$time})";

mysql_query($sql);

if(mysql_affected_rows()>0){

  	 echo "<script>location='./phpbbs.php?tid={$tid}&tname={$tname}'</script>";

  }else{
  	echo "<script>location='./writebbs.php?tid={$tid}&tname={$tname}'</script>";
  }
mysql_close();

?>