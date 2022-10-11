<style>
    /*设置body为flex布局*/
    body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
    }
    table {
        width: 18.75rem;
        margin: 4rem;
    }
    /*设置所有表格的表头为蓝色背景*/
    table caption {
        background-color: #00f;
        font-size: 1.6rem;
        color: white;
    }
    /*表格的第一列单元格和最后一列单元格设置红色背景*/
    table tr td:first-child, table tr td:last-child {
        color: #f00;
    }
</style>
<?php
//制作万年历
$year = 2022;
for ($m = 0; $m < 12; $m++) {//月份
    $month = $m + 1;
    echo "<table><caption>{$year}年{$month}月</caption>";
    echo "<tr><td>日</td>
        <td>1</td> 
        <td>2</td> 
        <td>3</td> 
        <td>4</td>  
        <td>5</td>  
        <td>6</td> </tr> ";
    $firstDay = mktime(0, 0, 0, $m, 1, $year);//获取每月第一天的时间戳
    $max = date('t', $firstDay);//获取当前月份最后一天的号数
    $w = date('w', $firstDay);//获取当前月份第一天是星期几
    //echo "$w"; //
    echo "<tr>";
    for ($d = 1; $d <= $max; $d++) {//循环输出每个月的所有天数
        $w = date('w', mktime(0, 0, 0, $m, $d, $year));//获取当前天是星期几
        if ($w && $d == 1 && $w != 0) echo "<td colspan='$w'></td>";//如果当前天是星期一到星期六，且是本月第一天，则输出空单元格  星期几就在前面输出几个空单元格
        echo "<td>$d</td>";//输出当前天
        //如果是星期六，就输出</tr>
        if ($w == 6) echo "<tr></tr>";
    }
    echo "</tr>";
    echo "</table>";
}

