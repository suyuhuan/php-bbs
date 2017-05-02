<?php
$id = $_GET['id'];
$name =$_GET['name'];
$tid=$_GET['tid'];
mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');

$sql = "update post set recycle='1' where id={$id}";

if(mysql_query($sql)){
	echo"<script>location='./postList.php?id={$tid}&name={$name}'</script>";
}



?>