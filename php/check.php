<?php
//检查用户名是否被占用
//检查邮箱格式是否正确
//检查邀请码是否正确：123456
//mail username password id 加入数据库
$dbms = 'mysql';
$host = 'localhost';
$dbname = 'blog';
$user = 'root';
$pwd = '';
$dsn = "$dbms:host=$host;dbname=$dbname";
try {
    $db = new PDO($dsn, $user, $pwd); //初始化一个PDO对象
    $db->query('set names utf-8');
    echo "连接成功<br/>";
    /*你还可以进行一次搜索操作
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    }
    */
    //$db= null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

//session_start();
if(isset($_SESSION)){
    header("location:login.php");
}