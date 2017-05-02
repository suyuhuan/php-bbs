<?php
 $id = $_GET['id'];
 mysql_connect('localhost','root','');
 mysql_set_charset('utf8');
 mysql_select_db('bbs');
 $sql = "delete from post where id={$id}";
 mysql_query($sql);
 if(mysql_query($sql)){
   echo "<script>location='./post.php'</script>";
 }

?>