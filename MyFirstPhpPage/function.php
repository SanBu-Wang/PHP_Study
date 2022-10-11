<?php

function myFun($name)
{
    echo '欢迎你' . $name . '!';
    //return '欢迎你'.$name.'!'
}

myFun('王汪旺');
function add($a,$b){
    return $a + $b;
}
echo add(5,7);
//引用传参

function extra(&$str){
    return $str.=" added on the table";
}
echo '</br>';
$s='food';
echo extra($s);