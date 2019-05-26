
<?php
session_start();
//include('check.php');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>bbs</title>
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

<body style="background: url('../images/bbs.jpg') no-repeat fixed;background-size: cover">
	<!-- header -->
	<header>
		<div class="logo ml-sm-4 ml-2 mt-3">
			<a href="index.php"><span class="fa fa-stumbleupon"></span></a>
		</div>
		<!-- menu -->
		<ul id="menu">
			<li>
				<input id="check02" type="checkbox" name="menu" />
				<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
				<ul class="submenu">
					<li><a href="index.php">Home</a></li>
					<li><a href="bbs.php">BBS</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="write_articles.php">Write_article</a></li>
                    <li><a href ="login.php">Login && Register</a></li>
                    <li><a href ="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- //menu -->
	</header>
	<!-- //header -->

	<!-- team -->
	<div style="bottom:0;background:url(1.jpg) no-repeat;width: 100%;height:100%;background-size: cover; "  >
		<!-- team content -->
		<div class="team-cont text-center pt-5 pb-xl-4 pb-3">
			<h3 class="title text-center text-wh font-weight-bold">BBS</h3>
        </div>
        <div style="margin:2% 8% 2% 70%;width=10%; color:white">
            <form action="bbs_index.php" method="post">
                <input type="text" placeholder="Search messages..." name="bbs_message_search">
            </form>
        </div>
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
        $result1 =  $db->query('select * from bbs order by _Date desc');
        $rowc = $result1->rowCount();
        ?>
        <div >
            <form  action="bbs_publish.php" method="post">
                <input style= "margin:10% 10% 0 10% ;color:black" type="text" name = "Author" placeholder="Nickname:" class="text-wh " >
                <input type ="text" placeholder="Topic:" name=" Title">
                <textarea style="margin:2% 10% 0 10% ;width:80%;height:10%" name="Content" placeholder="Message:"></textarea>
                <input style="margin:0 10% 0 10%;width:10%;height:10%;background: cornflowerblue;color:white"type = "submit" value="PUBLISH">
            </form>
        </div>
        <?php
        $result = $db->query('select * from bbs order by _Date desc');
        $rowc1 = $result-> rowCount();
        ?>
      <div style ='color:snow;margin:2% 10% 0 10% ;width:80%;height:10%' class=w3pvt-info_mail_grid_right><p><b>
                  <?php echo '共有'.$result->rowCount().'条留言'?></b></p> </div>";
     <?php
//      echo "fdddddddddddddddddddddddddd".$rowc.$rowc1;
//      if($rowc1 != $rowc){
//          echo "<script>alert('Title、Content、Author不能为空')</script>";
//      }
        if($result->rowCount()>0){
            while($row = $result->fetch(1)){
                if($row['Title']==""or$row['Author']==""or$row['Content']==""){
                    echo "<script>alert('Title、Content、Author不能为空')</script>";
                    $sql = "delete from bbs where Title='' OR Content = '' OR Author = ''";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    continue;
                }
                ?>

        <div style="color:snow;margin:2% 10% 0 10% ;width:80%;height:10%" class="w3pvt-info_mail_grid_right">
            <div style="height:20%">
                <h5 style="color: snow" class="title text-center text-wh font-weight-bold" ><?php echo $row['Title'] ?> </h5>
            </div>
            <div style="color: snow; height:70%">
                Content: <?php echo $row['Content'] ?>
            </div>
            <div style="color: snow; height:10%;bottom: 0">
                Author： <?php echo $row["Author"] ?> Date: <?php echo $row["_Date"] ?>
            </div>
        </div>
        <?php
            }
        }else{
            echo "<div style ='color:snow;margin:2% 10% 0 10% ;width:80%;height:10%' class=w3pvt-info_mail_grid_right><p><b>目前还没有用户留言</b></p> </div>";
        }
        ?>
        </div>
		<!-- //copyright -->
	</div>
	<!-- //team -->

</body>

</html>