<?php
   var_dump($_POST);
   $id = $_POST['id'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $repassword = $_POST['repassword'];
   $auth = $_POST['auth'];

   mysql_connect('localhost','root','');
   mysql_set_charset('utf8');
   mysql_select_db('bbs');
   $sql = "update user set username='{$username}',password='{$password}',auth='{$auth}' where id={$id}";
   if(mysql_query($sql)){
   	echo "<script>alert('修改成功')</script>";
	echo "<script>location='userList.php'</script>";
   }
 mysql_close();
?>