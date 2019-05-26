<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
//$db = new PDO($dsn, $user, $pwd, array(PDO::ATTR_PERSISTENT => true));
$Date = date("Y-m-d H:i:s");
$Title =$_POST["Title"];
$Author = $_POST["Author"];
$Content = $_POST["Content"];
$Email = "";
$sex ="";
$IP = $_SERVER['REMOTE_ADDR'];
//if($Title==""or$Author==""or$Content==""){
//    header("Location:bbs.php");
//    return;
//}
$sql = "insert into bbs(ID,Title,Author,_Date,Email,Content,IP,Sex)
values(?,?,?,?,?,?,?,?)";
$stmt = $db->prepare($sql);
$id = $stmt->rowCount()+1;
echo"$id";
$stmt->bindParam(1,$id);
$stmt->bindParam(2,$Title);
$stmt->bindParam(3,$Author);
$stmt->bindParam(4,$Date);
$stmt->bindParam(5,$Email);
$stmt->bindParam(6,$Content);
$stmt->bindParam(7,$IP);
$stmt->bindParam(8,$sex);
$stmt->execute();
header("Location:bbs.php");
?>
