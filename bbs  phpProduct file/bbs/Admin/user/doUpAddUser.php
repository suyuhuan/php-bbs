<?php
  $id =$_POST['id'];
  $name = $_POST['name'];
  $score = $_POST['score'];
  $email = $_POST['email'];
  $qq = $_POST['qq'];
  $infos = $_POST['infos'];
  
    $ext = pathinfo($_FILES['photo']['name'])['extension'];
 
    $url = "../../Public/upload/head/".md5(rand(0,999)).".".$ext;
 
    move_uploaded_file($_FILES['photo']['tmp_name'],$url);

    mysql_connect('localhost','root','');
    mysql_set_charset('utf8');
    mysql_select_db('bbs');

    $sql ="insert into userdetail(id,name,score,email,qq,photo,infos) values($id,'{$name}',$score,'{$email}','{$qq}','{$url}','{$infos}')";
   
    mysql_query($sql);
   
    if(mysql_affected_rows()>0){
     	header('location:./userList.php');
     }else{
     	header('location:./UpAddUser.php');
     }

  mysql_close();
?>