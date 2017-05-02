<?php
    var_dump($_FILES);

    $url = "../../Public/upload/logo/";
    
	$ext = pathinfo($_FILES['image']['name'])['extension'];
    $imgName = md5(rand(0,999)).'.'.$ext;
    

    move_uploaded_file($_FILES['image']['tmp_name'],$url.$imgName);

    mysql_connect('localhost','root','');
    mysql_set_charset('utf8');
    mysql_select_db('bbs');

     $sql ="update  conf set image='{$imgName}'";

     mysql_query($sql);

   if(mysql_affected_rows()>0){
     	echo "<script>location='./logoConf.php'</script>";
     }

mysql_close();

?>