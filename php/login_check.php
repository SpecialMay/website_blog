<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();
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
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
//$db = new PDO($dsn, $user, $pwd, array(PDO::ATTR_PERSISTENT => true));
$Date = date("Y-m-d H:i:s");
$pwd = $_POST["userpwd"];
$username =$_POST["username"];
$id = 0;
$sql2 = "select * from adim where username = '$username'";
$result = $db->query($sql2);
$row = $result->fetch(1);
if($row == NULL and $id==1) {
    echo"<script>alert('用户名不存在');location = 'login.php'</script>";
    //  header("Location:register.php");
    exit;
}elseif ($row['pwd'] != $pwd){
    echo"<script>alert('密码错误');location = 'login.php'</script>";
    //  header("Location:register.php");
    exit;
}else{

    //$_SESSION['id']=$row['ID'];
    echo"<script>alert('登录成功');location = 'blog.php'</script>";
    exit;
}



?>





