<?php
$link=mysqli_connect("localhost","mysql80dd","Yt7q24ug");
if(!$link){
    die ("数据库连接失败");
}else{
    echo "数据库连接成功！";
}

mysqli_close($link);