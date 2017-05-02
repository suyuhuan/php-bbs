<?php
  $id = $_GET['id'];
  $elite=$_GET['elite'];
  $elites=($elite==1?0:1);
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql="update post set elite={$elites} where id={$id}";
 if(mysql_query($sql)){
  	echo"<script>location='./post.php'</script>";
  }

?>