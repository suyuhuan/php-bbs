<?php
  $id = $_GET['id'];
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql="delete from user where id={$id}";
  mysql_query($sql);
  $sql2 ="delete from userdetail where id={$id}";
  mysql_query($sql2);
  if(mysql_query($sql)){
	echo "<script>location=' ./userList.php'</script>";
   }
  mysql_close();
?>