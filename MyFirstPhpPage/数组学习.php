<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
//del the first element
array_shift($arr);
//add the '100' to the third position
array_splice($arr,2,0,100);
//add the '200' to the first position
array_unshift($arr,200);
//del the last element
array_pop($arr);
//find the position of '100'
$pos = array_search(100,$arr);
//print the pos
echo "the pos value is $pos <br>";
//array_flip()交换数组中的键和值
$arr = array_flip($arr);
//print the array
//Print the dividing line
echo "-----------------<br>";
$a = 1;
$b = 2;
printf("a是%d,b是%d",$a,$b);
//Print the dividing line
echo "-----------------<br>";
//let the arrLength = the length of the array
$arrLength = count($arr);
//print the $arrLength
echo "the array's length is $arrLength <br>";
//use foreach to print the array
foreach($arr as $key=>$value){
    echo "the key is $key,the value is $value <br>";
}
//use sort() to sort the array
sort($arr);
//print the array
foreach($arr as $key=>$value){
    echo "the key is $key,the value is $value <br>";
}
rsort($arr);//逆序
foreach ($arr as $key => $value){
    echo "the key is $key,the value is $value <br>";
}
