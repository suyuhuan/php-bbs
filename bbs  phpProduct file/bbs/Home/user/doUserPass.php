<?php
header('content-type:text/html;charset=utf-8');
$id = $_POST['id'];
$oPsw = md5($_POST['oPsw']);
$nPsw = md5($_POST['nPsw']);
$rePsw = md5($_POST['rePsw']);

mysql_connect('localhost','root','');
mysql_set_charset('utf8');
mysql_select_db('bbs');

$sql = "select password from user where id={$id}";
$rel=mysql_query($sql);
$array = mysql_fetch_assoc($rel);

if($oPsw == $array['password']){
	if($nPsw == $rePsw){
      $sql2 = "update user set password = '{$nPsw}' where id={$id}";
      mysql_query($sql2);
      echo "修改密码完成!";
	}else{
	  echo "确认密码有误，请再输入一次！";
	}	
}else{
	echo "输入的原密码有误！";
}
mysql_close();


?>