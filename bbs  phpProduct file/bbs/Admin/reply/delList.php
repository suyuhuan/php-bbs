<?php
  $id = $_GET['id'];
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');

  $sql = "delete from reply where id={$id}";
  if(mysql_query($sql)){
  	echo"<script>location='./List.php'</script>";
  }

mysql_close();

?>