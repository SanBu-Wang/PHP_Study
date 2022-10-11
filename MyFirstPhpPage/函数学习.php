<?php
//创建函数
function getName($lastName,$firstName){
    return "$lastName $firstName <br>";
}
//调用函数
echo getName("姓氏","名字");
echo getName("李","四");
echo getName("王","五");
