<?php
  $pid = $_POST['id'];
  $name = $_POST['name'];
 
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');

  $sql = "insert into type(name,pid,path) values('{$name}','{$pid}','0-$pid')";
 
  mysql_query($sql);

  if(mysql_affected_rows()>0){
     	header('location:./manageType.php');
     }else{
     	header('location:./addSubType.php');
     }

  mysql_close();
  

?>