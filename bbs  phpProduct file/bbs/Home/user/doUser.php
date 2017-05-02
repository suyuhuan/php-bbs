<?php
header('content-type:text/html;charset=utf-8');
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$qq = $_POST['qq'];
$infos = $_POST['infos'];


mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');
$sql = "update userdetail set name='{$name}',email='{$email}',qq={$qq},infos='{$infos}' where id={$id}";

mysql_query($sql);

if(mysql_affected_rows()>0){
  header('location:./showUser.php');
}else{
 header('location:./user.php');
}


?>