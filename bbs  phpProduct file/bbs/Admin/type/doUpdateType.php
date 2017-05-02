<?php
  $id = $_POST['id'];
  $name = $_POST['name'];

  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');

  $sql = "update type set name='{$name}' where id={$id}";

  if(mysql_query($sql)){
  	echo "<script>location='manageType.php'</script>";
  }else{
  	echo "<script>location='updateType.php?id={$id}'</script>";
  }


mysql_close();

?>