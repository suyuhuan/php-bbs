<?php
     header('content-type:text/html;charset=utf-8');
      $userName = $_POST['username'];
      $passWord = md5($_POST['password']);
      $rePassword = $_POST['repassword'];
      $auth = $_POST['auth'];
  
   
     mysql_connect('localhost','root','');

     mysql_set_charset('utf8');

     mysql_select_db('bbs');

     $sql = "insert into user(username,password,auth) values ('{$userName}','{$passWord}','{$auth}')";
     // echo var_dump($sql);
     //  exit;
     mysql_query($sql);
     
     $id=mysql_insert_id();

     $sql2 = "insert into userdetail(id,name) values({$id},'{$userName}')";
     mysql_query($sql2);
     
     if(mysql_affected_rows()>0){
     	header('location:./userList.php');
     }else{
     	header('location:./addUser.php');
     }

  mysql_close();

?>