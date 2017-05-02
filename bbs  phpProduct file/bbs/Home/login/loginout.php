<?php
session_start();
session_unset();
session_destroy();
setcookie('id','',time()-3600,'/');
setcookie('username','',time()-3600,'/');
setcookie('name','',time()-3600,'/');
setcookie('score','',time()-3600,'/');
setcookie('flag','',time()-3600,'/');



echo "<script>location='../index.php'</script>";


?>