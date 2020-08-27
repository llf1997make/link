<?php
    header("content-type:text/html;charset=utf-8");
    //接收前端的数据
    $name = $_REQUEST['username'];
    $pass = $_REQUEST['userpass'];
    //连接数据库
    $conn = mysqli_connect("localhost","root","root","mydb2005");
    $result = mysqli_query($conn,"select * from user where username='{$name}' and userpass='{$pass}'");
    //关闭数据库
    mysqli_close($conn);
    $arr = mysqli_fetch_all($result, MYSQL_ASSOC);
    if(count($arr)==1){
        echo "1"; //登录成功
    }else{
        echo "0"; //登录失败
    }
?>