<?php

$link = mysqli_connect("localhost", "root", "", "studentphp");

$sql = "SELECT * FROM products LIMIT 5";
echo $sql;

?>
