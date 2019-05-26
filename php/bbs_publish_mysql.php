<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 $Date = date("Y-m-d H:i:s");
$Title =$_POST["Title"];
$Author = $_POST["Author"];
$Content = $_POST["Content"];
$Email = "";
$sex ="";
$id = 0;
$IP = $_SERVER['REMOTE_ADDR'];
$sql = "insert into bbs (ID,Title,Author,_Date,Email,Content,IP,Sex)
values(?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$sql2 = "select * from bbs";
$result = mysqli_query($conn,$sql2);
$id= mysqli_num_rows($result)+1;

$stmt->bind_param("isssssss",$id,$Title,$Author,$Date,$Email,$Content,$IP,$sex);
$stmt->execute();
echo "$id";
if ($conn->query($sql) == TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
$stmt->close();
//header("Location:bbs.php");
?>
