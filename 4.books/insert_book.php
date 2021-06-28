<?php
require('config.php');

// 获取表单数据
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];

if (!$isbn || !$author || !$title || !$price){
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
$query = "insert into booklist values('".$isbn."','"
                                       .$author."','"
                                       .$title."',"
                                       .$price.")";

echo '<pre>' . $query . '</pre>' ;
$result = $conn->query($query);

if ($result)
    echo $conn->affected_rows.' 条记录被插入数据库中';
else
    echo '插入记录错误，请检查程序代码';

// 关闭连接
$conn->close();
?>