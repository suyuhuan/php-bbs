<?php
  header('content-type:text/html;charset=utf-8');
  mysql_connect('localhost','root','');
  mysql_set_charset('utf8');
  mysql_select_db('bbs');
  $sql = 'select * from conf';
  $conf = mysql_fetch_assoc(mysql_query($sql));
?>