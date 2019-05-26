<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
//$db = new PDO($dsn, $user, $pwd, array(PDO::ATTR_PERSISTENT => true));
$Date = date("Y-m-d H:i:s");
$pwd = $_POST["userpwd"];
$username =$_POST["username"];
$invite_code = $_POST["invite_code"];
$email = $_POST['mail'];
$com_email = confirm_email($email);
$id = 0;
$sql1 = "select * from adim";
$result1 = $db->query($sql1);
$id = $result1->rowCount()+1;
$sql2 = "select * from adim where username = $username";
$result = $db->query($sql2);
if(!isset($result)){
    $row = $result->fetch(1);
}else{
    $row=NULL;
}
if($row != NULL ) {
    echo"<script>alert('用户名已存在');location = 'register.php'</script>";
  //  header("Location:register.php");
    exit;
}elseif ($com_email ==false){
    echo"<script>alert('邮箱格式错误');location = 'register.php'</script>";
  //  header("Location:register.php");
    exit;
}elseif($invite_code!='123456'){
    echo"<script>alert('邀请码不正确');location = 'register.php'</script>";
  // header("Location:register.php");
    exit;
}
$sql = "insert into adim(ID,username,pwd,email,_Date)
values(?,?,?,?,?)";
$stmt = $db->prepare($sql);
//$id = $stmt->rowCount()+1;
echo"$id";
$stmt->bindParam(1,$id);
$stmt->bindParam(2,$username);
$stmt->bindParam(3,$pwd);
$stmt->bindParam(4,$email);
$stmt->bindParam(5,$Date);
$stmt->execute();
header("Location:login.php");
function confirm_email($email){
    $com_email = true;
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $com_email= false;
    }
    return $com_email;
}
echo"<script>alert('注册成功');location = 'login.php'</script>";
//header("Location:login.php");
?>





