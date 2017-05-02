<?php
 $id = $_POST['id'];

    $url = "../../Public/upload/head/";

    $ext = pathinfo($_FILES['photo']['name'])['extension'];
    $imgName = md5(rand(0,999)).'.'.$ext;

    move_uploaded_file($_FILES['photo']['tmp_name'],$url.$imgName);

    mysql_connect('localhost','root','');
    mysql_set_charset('utf8');
    mysql_select_db('bbs');

    $sql ="update  userdetail set photo='{$imgName}' where id={$id}";

    mysql_query($sql);
   
    if(mysql_affected_rows()>0){
     	header('location:./showUser.php');
     }else{
     	header('location:./userimge.php');
     }

  mysql_close();


?>