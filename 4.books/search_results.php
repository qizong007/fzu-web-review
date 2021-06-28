<?php
require('config.php');

// 获取表单数据
$searchtype = $_POST['searchtype'];
$searchterm = $_POST['searchterm'];

if (!$searchtype || !$searchterm){
    echo '您输入的信息有误或者不完整！<br />'
        .'请退回再次重试。';
    exit;
}

// 创建连接
@ $conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
// 设置 utf8 字符集
$conn->query("SET NAMES utf8");

// 查询语句
$query = "select * from booklist where "
                            .$_POST['searchtype']." like '%"
                            .$_POST['searchterm']."%'";

$result = $conn->query($query);
$num_results = $result->num_rows;
echo '<p>共有 '.$num_results.' 本图书</p>';

for ($i=0; $i <$num_results; $i++) {
    $row = $result->fetch_assoc();
    echo '<h2>'.($i+1).'. '.htmlspecialchars(stripslashes($row['title']))."</h2>";
    echo '<p>作者：'.htmlspecialchars(stripslashes($row['author']))."</p>";
    echo '<p>价格：￥ '.htmlspecialchars(stripslashes($row['price']))." 元</p>";
    echo '<p>ISBN：'.htmlspecialchars(stripslashes($row['isbn']))."</p>";
}

// 释放查询结果集
$result->free();
// 关闭连接
$conn->close();
?>