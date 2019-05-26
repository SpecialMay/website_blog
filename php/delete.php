<?php
$dbms = 'mysql';
$host = 'localhost';
$dbname = 'blog';
$user = 'root';
$pwd = '';
$dsn = "$dbms:host=$host;dbname=$dbname";
try {
    $db = new PDO($dsn, $user, $pwd); //初始化一个PDO对象
    $db->query('set names utf-8');
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
$id = $_GET['id'];
$sql= "delete from article where ID = $id";
$db->query($sql);
$sql2="UPDATE `article` SET `ID`=[value-1],WHERE `ID`>$id";
$db->query($sql2);
header("location:blog.php");
?>