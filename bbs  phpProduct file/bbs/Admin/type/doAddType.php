<?php
   $name = $_POST['name'];
   mysql_connect('localhost','root','');
   mysql_set_charset('utf8');
   mysql_select_db('bbs');
   $sql = "insert into type(name) value('{$name}')";
   mysql_query($sql);
   if(mysql_affected_rows()>0){
   	header('location:manageType.php');
   }else{
   	header('location:addType.php');
   }

  mysql_close();
?>