<style>
  * {
    font-family: '微软雅黑', Courier, monospace;
    text-align: center;
    margin: 0;
    padding: 0;
  }

  table {
    margin: 0 auto;
    height: 30px;
  }
</style>
<?php
$link = mysqli_connect("localhost", "root", "Yt7q24ug", "php");
if (!$link) {
  die("数据库连接失败@");
} else {

  echo "数据库连接成功！";
}
// $sql=<<<EOD
// CREATE TABLE IF NOT EXISTS `studentphp` (
//     `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '学号',
//     `name` VARCHAR(32) NOT NULL COMMENT '姓名',
//     `gender` ENUM('男', '女') DEFAULT '男' NOT NULL COMMENT '性别'
//   ) DEFAULT CHARSET=utf8;
// EOD;
// $re=mysqli_query($link,$sql);
// echo $re;

$sql = 'select * from studentphp';
$res = mysqli_query($link, $sql);

if (!$res) {
  echo '查询失败' . mysqli_error($link);
} else {
  /* echo '查询成功';
    echo '<br>';
    $a = mysqli_fetch_all($res);
    print_r($a); */
  echo '<table border="1" width="500" align="center">';
  echo '<caption><h2>学生信息表</h2></caption>';
  echo '<tr>';
  echo '<th>学号</th>';
  echo '<th>姓名</th>';
  echo '<th>性别</th>';
  echo '</tr>';
  while ($row = mysqli_fetch_assoc($res)) { //mysqli_fetch_assoc()函数从结果集中取得一行作为关联数组，并返回关联数组
    //mysqli_assoc函数用于从结果集中取得一行作为关联数组
    //mysqli_fetch_assoc()函数从结果集中取得一行作为关联数组，并返回关联数组

    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '</tr>';
  }

  echo '</table>';
  mysqli_free_result($res);
}


mysqli_close($link); //关闭数据库连接
?>