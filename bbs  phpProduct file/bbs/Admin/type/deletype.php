<?php
   $id = $_GET['id'];
   mysql_connect('localhost','root','');
   mysql_set_charset('utf8');
   mysql_select_db('bbs');
  $sql ="select * from post where tid={$id}"; 
   $rel = mysql_query($sql);
  while(mysql_num_rows($rel)<=0){
  
  	//删除语句
  	$sql ="delete from type where id={$id}";
  	
  	//执行删除
  	mysql_query($sql);

  	echo "<script>arter('删除成功！')</script>";
 	  echo "<script>location='./manageType.php'</script>";
 }

 	echo "<script>location='./manageType.php'</script>";
    //页面跳转

  /* if($id != $array['pid']){
      $sql ="delete from type where id={$id}";
   if(mysql_query($sql)){
   	echo "<script>arter('删除成功！')</script>";
   	echo "<script>location='./manageType.php'</script>";
   }else{
    	echo "<script>arter('删除失败！')</script>";
   }else{
     	echo "<script>arter('父类中有子类，不能删除！')</script>";
   }
   }*/
  mysql_close();