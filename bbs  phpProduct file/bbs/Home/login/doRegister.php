 <?php
    header('content-type:text/html;charset=utf-8');
    //var_dump($_POST);
 
    $userName = trim($_POST['username']);//注册的账号
    $password = trim($_POST['password']);//密码
    $rePassword = trim($_POST['repassword']);//确认密码
    $code = $_POST['code'];//验证码

    //先判断密码是否正确
    if(empty($userName) || empty($password) || (md5($password) != md5($rePassword))){
        header('location:./register.php');
        exit;
    }

    //判断验证码是否正确
    session_start();
    // echo $_SESSION['code'];
    // exit;
    if($code !=strtolower($_SESSION['code'])) {
        header('location:./register.php');
        exit;
    }
    //将数据写入到数据库中
    mysql_connect('localhost','root','');

    mysql_set_charset('utf8');
    mysql_select_db('bbs');

    $SQL = "insert into user(username,password) values ('{$userName}','".md5($password)."')";
    mysql_query($SQL);

    $id=mysql_insert_id();

    $SQL2 = "insert into userdetail(id,name) values({$id},'{$userName}')";
    mysql_query($SQL2);

     

    if(mysql_affected_rows() > 0){
        header('location:./login.php');
    }else{
        header('location:./register.php');
    }
mysql_close();
?>
