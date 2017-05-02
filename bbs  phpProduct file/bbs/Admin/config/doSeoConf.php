<?php
$keywords=$_POST['keywords'];
$description = $_POST['description'];
mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');
$sql = "update conf set keywords='{$keywords}',description='{$description}' where id=1";
mysql_query($sql);
if(mysql_affected_rows()>0){

   	echo "<script>location='./seoConf.php'</script>";
   }
 mysql_close();



?>