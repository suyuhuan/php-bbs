<?php
$id = $_GET['id'];
mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');

$sql = "update post set recycle=0 where id={$id}";
if(mysql_query($sql)){
	echo"<script>location='./recycleList.php?id={$id}'</script>";
}
?>