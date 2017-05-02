<?php
 $id = $_POST['id'];
 $title = $_POST['title'];
 $content = $_POST['content'];
 $time = time();

 mysql_connect('localhost','root','');
 mysql_set_charset('utf8');
 mysql_select_db('bbs');

 $sql = "update post set title='{$title}',content='{$content}',time={$time} where id={$id}";

 if(mysql_query($sql)){
  	echo "<script>location='viewPost.php?id={$id}'</script>";
  }else{
  	echo "<script>location='updatePost.php?id={$id}'</script>";
  }

 mysql_close();

?>