<?php
 $id = $_GET['id'];
 $tid = $_GET['tid'];
 mysql_connect('localhost','root','');
 mysql_set_charset('utf8');
 mysql_select_db('bbs');
 $sql = "delete from post where id={$id}";
 mysql_query($sql);
 if(mysql_affected_rows()>0){
   echo "<script>location='./postList.php?id={$tid}'</script>";
 }

?>