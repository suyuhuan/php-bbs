<?php
	$id = $_POST['id'];
    $username=$_POST['username'];
	$name = $_POST['name'];
	$score = $_POST['score'];
	$email = $_POST['email'];
	$qq = $_POST['qq'];
	$infos = $_POST['infos'];

     //原来图像路径
    $url = "../../Public/upload/head/";
    $Ipohto = $url.$_POST['Iphoto'];
   
     unlink($Ipohto);

	$ext = pathinfo($_FILES['photo']['name'])['extension'];
    $imgName = md5(rand(0,999)).'.'.$ext;
    

    move_uploaded_file($_FILES['photo']['tmp_name'],$url.$imgName);

    mysql_connect('localhost','root','');
    mysql_set_charset('utf8');
    mysql_select_db('bbs');

    $sql ="update  userdetail set name='$name',score=$score,email='$email',qq='$qq',photo='$imgName',infos='$infos' where id={$id}";

    mysql_query($sql);
   
    if(mysql_affected_rows()>0){
     	echo "<script>location='showAddUpUser.php?id=$id&username=$username'</script>";
     }else{
     	echo "<script>location='updateUpUser.php?id=$id&username=$username'</script>";
     }

  mysql_close();


    

 

  

 // mysql_close();
?>