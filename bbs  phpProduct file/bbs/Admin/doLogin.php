<?php
   header('content-type:text/html;charset=utf-8');
    session_start();
    $userName = trim($_POST['username']);//用户名
    $password = trim($_POST['password']);//密码


    //查看是否都不为空，如果为空就跳转
    if(empty($userName) || empty($password)){
        header('location:./login.php');
        exit;
    }

    //查看账号\密码\和数据库中的是否匹配
    mysql_connect('localhost','root','');
    mysql_set_charset('utf8');
    mysql_select_db('bbs');

    $md5Password = md5($password);//给密码加密
    $SQL = "select * from user where username='{$userName}' and password='{$md5Password}' and auth='1' and status='1'";

    $result = mysql_query($SQL);

    //取得获得了多少结果集(多少条数据)
    if(mysql_num_rows($result) > 0){
        //得设置一些信息 放在SESSION或COOKIE里面
        $AuserDetail = mysql_fetch_assoc($result);//将结果集拿出来
        $_SESSION['AuserDetail'] = $AuserDetail;//将所有的用户数据都放到了 session中
        $_SESSION['Aflag'] = md5($userDetail['id']);//现在做一个唯一的标识符号，用来判断用户是否登录   

        header('location:./index.php');
    }else{
        header('location:./login.php');
    }
    mysql_close();
?>
