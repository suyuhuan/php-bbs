<?php
  $tid=$_GET['tid'];
  $id = $_GET['id'];
  $name= $_GET['name'];
  $top=$_GET['top'];
  $tops=($top==1?0:1);
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql="update post set top={$tops} where id={$id}";
 if(mysql_query($sql)){
  	echo"<script>location='./postList.php?id={$tid}&name={$name}'</script>";
  }

?>