<?php
   $close = $_POST['close'];
   mysql_connect('localhost','root','');
   mysql_set_charset('utf8');
   mysql_select_db('bbs');
   $sql ="update conf set close='{$close}'";
   mysql_query($sql);
   if(mysql_affected_rows()>0){
   	echo "<script>location='./exit.php'</script>";
   }else{
   		echo "<script>location='./exit.php'</script>";
   }
 mysql_close();

?>