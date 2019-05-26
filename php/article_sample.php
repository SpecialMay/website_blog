<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Article_sample</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body class="blog">
<!-- header -->
<header>
    <div class="logo blog-clr ml-sm-4 ml-2 mt-3">
        <a href="index.php"><img src = "" height ="10%" width="10%" alt=""/><!--<span class="fa fa-stumbleupon"></span>--></a>
    </div>
    <!-- menu -->
    <ul id="menu">
        <li>
            <input id="check02" type="checkbox" name="menu" />
            <label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
            <ul class="submenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="bbs.php">BBS</a></li>
                <li><a href="blog.php" class="active">Blog</a></li>
                <li><a href="write_articles.php">Write articles</a></li>
            </ul>
        </li>
    </ul>
    <!-- //menu -->
</header>
<!-- //header -->
<!--myblog-->
<!-- blog -->
<div class="he-codes">
    <!-- blog content -->
    <article>
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
        $ID = $_GET['name'];
         $sql = "Select * from article where ID = :id";
          $stmt = $db->prepare($sql);
            $stmt->execute([
                    'id' => $ID
            ]);
            $row=$stmt->fetch(1);
        ?>
        <div class="blog-cont pt-5">
            <h3 class="title text-center text-bl font-weight-bold">Title:<?php echo $row["Title"] ?></h3>
            <div class="container pt-5">
                <h4 class="title text-center text-bl font-weight-bold">Author:<?php echo $row['Author']?>
                    Date:<?php echo $row['_Date']?></h4>
                <h4 class="title text-center text-bl font-weight-bold">Tags:<?php echo $row['Tag']?></h4>
                 <div style="margin:2% 80% 2% 2%">

                 </div>
                <div style="color:white" class="w3pvt-info_mail_grid_right">
                    <?php echo $row['Article']?>
                </div>
                </div>
            </div>
    </article>
</div>
<!-- //blog content -->
<!-- copyright -->
<div class="wthree_copy_right text-right ml-auto mt-5 mr-sm-5 mr-4">
    <!--<p class="text-bl">Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>-->
</div>
<!-- //copyright -->
</div>
<!-- //blog -->

</body>

</html>


<?php
/* $file_path ="1.txt";
 if(file_exists($file_path)){
     $str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
     $str = str_replace("\r\n","<br />",$str);
     echo $str;
 }*/
?>