<?php
   $id = $_GET['id'];
   mysql_connect('localhost','root','');
   mysql_set_charset('utf8');
   mysql_select_db('bbs');
  $sql ="select * from reply where pid={$id}"; 
   $rel = mysql_query($sql);
  while(mysql_num_rows($rel)>=0){
  
  	//删除语句
  	$sql2 ="delete from post where id={$id}";
    mysql_query($sql2);
    $sql3 = "delete from reply where pid={$id}";
  	
  	//执行删除
  	mysql_query($sql3);

  	echo "<script>arter('删除成功！')</script>";
 	  echo "<script>location='./recycleList.php'</script>";
 }

 	echo "<script>location='./recycleList.php'</script>";