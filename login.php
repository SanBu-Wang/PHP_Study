<?php
//post请求__安全、长数据  和  get请求
/*echo $_GET['title'];
echo $_POST['title_2'];*/
var_dump($_GET);
echo '<br>';
echo '------------------------------'.'</br>';
//var_dump($_POST);
//echo '------------------------------'.'</br>';
//var_dump($_REQUEST);
echo '<br>';
echo '------------------------------'.'</br>';
if($_REQUEST['submit'] == '提交'){
    echo '提交成功';
    echo '<br>';
    if(isset($_REQUEST['title'])) {
        echo "欢迎您" . $_REQUEST['title']."<br>";
    }
    if(isset($_REQUEST['pass'])) {
        echo "您的密码为" . $_REQUEST['pass'];
    }
}

