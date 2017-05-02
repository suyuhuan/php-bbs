<?php
             $name = $_POST['name'];
             $link = $_POST['link'];
			 mysql_connect('localhost','root','');
			 mysql_set_charset('utf8');
			 mysql_select_db('bbs');
			 $sql = "insert into link(name,link) values('{$name}','{$link}')";
			 if(mysql_query($sql)){
				header('location:./linkConf.php');
			}else{
				header('location:./linkConf.php');
			}
			mysql_close();
?>
