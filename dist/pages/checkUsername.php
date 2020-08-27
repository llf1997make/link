<?php
    header("content-type:text/html;charset=utf-8");
    // 接受前端数据
    $name = $_REQUEST['username'];
    // 连接数据库
    $conn = mysqli_connect("localhost","root","root","mydb2005");
    $result = mysqli_query($conn,"select * from user where username='{$name}'");
    //关闭数据库
    mysqli_close($conn);
    $arr = mysqli_fetch_all($result, MYSQL_ASSOC);
    if(count($arr)==1){
        echo "1";  //用户名已存在
    }else{
        echo "0"; //用户名不存在
    }
?>