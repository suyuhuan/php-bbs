<?php
  $id = $_POST['id'];
  $tname = $_POST['tname'];
  $uid = $_POST['uid'];
  $pid = $_POST['pid'];
  $content = $_POST['content']; 
  $time = time();

  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql = "insert into reply(uid,pid,content,time) values('{$uid}','{$pid}','{$content}',{$time})";
  mysql_query($sql);

  if(mysql_affected_rows()>0){
     $score="update userdetail set score=score+2 where id={$uid}";
     mysql_query($score);
  	 echo "<script>location='./readbbs.php?id={$id}&tname={$tname}'</script>";

  }
  mysql_close();
?>