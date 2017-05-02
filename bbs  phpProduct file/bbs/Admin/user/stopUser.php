<?php
  $id = $_GET['id'];
  $statu = $_GET['status'];
  
  if($statu ==1){
  	$status =0;
  }else{
  	$status = 1;
  }
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql = "update user set status='{$status}' where id={$id}";
  if(mysql_query($sql)){
	header('location:userlist.php');
}
mysql_close();
?>