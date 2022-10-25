<?php

$link = mysqli_connect("localhost", "root", "Yt7q24ug", "php");

mysqli_set_charset($link, "UTF-8");

$sql = "select * from user";

$res = mysqli_query($link, $sql);

// var_dump($name_res);

// var_dump($pass_res);


$sql = "insert into user(name,pass) values('$name','$pass')";

if ($_post['login'] == "登录") { //判断是否点击了登录按钮
    $row = mysqli_fetch_assoc($res); //获取一行数据
    if ($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']) {
        echo "登录成功";
    } else {
        echo "登录失败";
    }
} else if ($_POST['register'] == "注册") {
    $sql_reg = "insert into user(username,password) values('" . $_POST['regusername'] . "','" . $_POST['regpassword'] . "')";

    $res_reg = mysqli_query($link, $sql_reg);

    if ($res_reg) {
        echo "注册成功";
    } else {
        echo "注册失败";
    }
}
