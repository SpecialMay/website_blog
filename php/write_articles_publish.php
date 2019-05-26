<!DOCTYPE html>
<meta charset="UTF-8" />
<?php
header("Content-Type:text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *");
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
$Date = date("Y_m_d_H_i_s");
$Title =$_POST["Title"];
$Author = $_POST["Author"];
$Article_path="";
$abstract = $_POST["abstract"];
$Remark = 0;
$Hits = 0;
$tag= $_POST["tag"];
$Delete_tag = false;
$sql2 = "SELECT * FROM article";
$result = $db->query($sql2);
$id =  $result->rowCount() +1;
$Article_ID = $id;
//echo "$id,$Title,$Author,$Date,$tag,$Article_ID,$Delete_tag,$Article,$Hits,$Remark,$abstract";
//载入aritcle 内容
if (isset($_POST['submit'])) {
    $Content = $_POST["test-editormd-markdown-doc"];
 //   echo "$Content ";
    $filename = "../md_source/".$Title.$Date.".md";
    $myfile = fopen($filename, "w") or exit("Unable to open file!");
    fwrite($myfile,$Content);
    $Article = $filename;
    //echo "$Article";
    fclose($myfile);
    //首先检查是否有直接用id号调用，
    //如果有文章被删除了，后面的所有的文章id-1
}
echo "'-'.$id,$Title,$Author,$Date,$tag,$Article_ID,$Delete_tag,$Article,$Hits,$Remark,$abstract";
try {
    $sql = "insert into article(ID,Title,Author,_Date,Tag,Article_ID,Article,Hits,Remark,abstract)
values(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $Title);
    $stmt->bindParam(3, $Author);
    $stmt->bindParam(4, $Date);
    $stmt->bindParam(5, $tag);
    $stmt->bindParam(6, $Article_ID);
    $stmt->bindParam(7, $Article);
    $stmt->bindParam(8, $Hits);
    $stmt->bindParam(9, $Remark);
    $stmt->bindParam(10, $abstract);
    $stmt->execute();
}catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
header("Location:blog.php");
?>
