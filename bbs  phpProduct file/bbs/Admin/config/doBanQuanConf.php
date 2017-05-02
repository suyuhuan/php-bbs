<?php
$title=$_POST['title'];
$banquan = $_POST['banquan'];
mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');
$sql = "update conf set title='{$title}',banquan='{$banquan}' where id=1";

if(mysql_query($sql)){
	header('location:./banQuanConf.php');
}




?>