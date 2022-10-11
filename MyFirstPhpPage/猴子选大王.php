<?php
//猴子选大王
$n = 100;
$m = 3;
//定义一个数组

$monkey = [];
for ($i = 1; $i <= $n; $i++) {
    Array_push($monkey, $i);
}
$k = 0;
$head = 0;
while (sizeof($monkey) > 1) {
    $k++;
    $head = Array_shift($monkey);
    if ($k != $m) {
        Array_push($monkey, $head);
    } else {
        $k = 0;
    }
}
echo "第".$monkey[0]."只猴子是大王";
