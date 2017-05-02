<?php
    header('content-type:text/html;charset=utf-8');
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
    $SQL = "select * from user,userdetail where user.id = userdetail.id and username='{$userName}' and password='{$md5Password}' and status
='1' ";
    

    $result = mysql_query($SQL);
   
    //取得获得了多少结果集(多少条数据)
    if(mysql_num_rows($result) > 0){
        $userDetail = mysql_fetch_assoc($result);
        $score ="update userdetail set score=score+5 where id={$userDetail['id']}";
        mysql_query($score);
       if(isset($_POST['rember'])){
        setcookie('id',$userDetail['id'],time()*60*60*24,'/');
        setcookie('username',$userDetail['username'],time()*60*60*24,'/');
        setcookie('name',$userDetail['name'],time()*60*60*24,'/');
        setcookie('score',$userDetail['score'],time()*60*60*24,'/');
        setcookie('email',$userDetail['email'],time()*60*60*24,'/');
        setcookie('qq',$userDetail['qq'],time()*60*60*24,'/');
        setcookie('photo',$userDetail['photo'],time()*60*60*24,'/');
        setcookie('infos',$userDetail['infos'],time()*60*60*24,'/');
        setcookie('flag',md5($userDetail['id']),time()*60*60*24,'/');
        header('location:../index.php');
       }else{
         session_start();
         $_SESSION['userDetail']['id'] = $userDetail['id'];
         $_SESSION['userDetail']['username'] = $userDetail['username'];
         $_SESSION['userDetail']['name'] = $userDetail['name'];
         $_SESSION['userDetail']['score'] = $userDetail['score'];
         $_SESSION['userDetail']['email'] = $userDetail['email'];
         $_SESSION['userDetail']['qq'] = $userDetail['qq'];
         $_SESSION['userDetail']['photo'] = $userDetail['photo'];
         $_SESSION['userDetail']['infos'] = $userDetail['infos'];
         $_SESSION['userDetail']['flag'] = md5($userDetail['id']);
         header('location:../index.php');
       }
         
    }else{
        header('location:./login.php');
    }
    mysql_close();
?>
