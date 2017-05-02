<?php
  $id = $_GET['id'];
  $pid =$_GET['pid'];
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');

  $sql = "delete from reply where id={$id}";
  if(mysql_query($sql)){
  	echo"<script>location='./replyList.php?id={$pid}'</script>";
  }

mysql_close();

?>