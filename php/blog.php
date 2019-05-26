<!DOCTYPE html>
<?php
//session_start();
//include('check.php');

?>
<html lang="zxx">

<head>
	<title>Blog</title>
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

<body  class = "blog">
	<!-- header -->
	<header>
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
                    <li><a href ="login.php">Login && Register</a></li>
                    <li><a href ="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- //menu -->
	</header>
	<!-- //header -->
	<!--myblog-->
	<!-- blog -->
	<div class="blog he-codes">
		<!-- blog content -->
		<article>
		<div class="blog-cont pt-5">
			<h3 class="title text-center text-bl font-weight-bold">Our Blogs</h3>
			<!--左边-->
			<div style="position:fixed;background-color:rgba(250, 245, 245, 0.808);width: 30%; float: left ; left:10px;top:100px; display:inline;"class = "blog" >
				<div style = "border:1px solid rgb(151, 149, 149);top:20px;" >
					<h5>about us:</h5>
				   <p><img src ="../images/acadamy_logo.jpg" height="50px" width="50px" alt="">
					数据学院,数据科学与工程学院，为华东师范大学的一个学院，成立于2016年9月[1]，
					由原数据科学与工程研究院组建而成。学院的前身数据科学与工程研究院成立于2013年9月
				   </p>
				</div>

				<div style = "margin:0px 10px ;">
				</br>
					<h4>
						博客使用简介:
					</h4>
					<p>
						1. 右侧显示了最近发布的文章的文章;<br/>
						2. 下方可以用关键词搜索你想要的文章;<br/>
						3. 如果你想上传或者编辑文章，请注册登录;<br/>
						4. 每篇文章下可以评论，不用登录.<br/>
					</p>
				</div>
				<div style="margin:40px 8px;" >
					<form action="index.php" method="post" name = "keyword_search" id = "keyword_search">
						<input name = "keywords" type = "text" placeholder="请输入关键词..."/>
						<input name = "submit" type = "submit" value="搜索"/>
					</form>
				</div>
				<div class = cloud; style="margin:5px;">
					<div class="cloud" style = "margin:5px ;">
							<h5>标签云</h5>
							<div style="background-color:rgba(250, 245, 245, 0.808)">
                                <a href="blog_tag.php?name=no_tag" >无标签</a>
							   <a href="blog_tag.php?name=数学基础">数学基础  </a>
							   <a href="blog_tag.php?name=算法 ">算法</a>
								<a href="blog_tag.php?name=操作系统">操作系统</a>
								<a href="blog_tag.php?name=人工智能导论">人工智能导论</a>
								<a href="blog_tag.php?name=概率论">概率论</a>
                                <a href="blog_tag.php?name=学习经验">学习经验</a>
								<a href="blog_tag.php?name=其它">其它</a>
						</div>
						  </div>
				</div>
				<div style = "margin:5px ;">
						<h5>点击率排行：</h5>
						<div style="background-color:rgba(250, 245, 245, 0.808)">
						<ul>
						<li><a href="/">啊1</a></br></li>
                            <li><a href="/">啊1</a></br></li>
                            <li><a href="/">啊1</a></br></li>
                            <li><a href="/">啊1</a></br></li>
                            <li><a href="/">啊1</a></br></li>
						</ul>
					</div>
				</div>
			</div>
			<!--右边-->
			<div class="mt-lg-0 " style="width: 70%; float: right ;position: relative;top:50px;left:30px;display:inline;border:1px  rgba(14, 51, 49, 0.473)">
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
                if(isset($_GET['name'])){
                    $tag_name = $_GET['name'];
                }else{
                    $tag_name = 'no_tag';
                }

                if($tag_name=="no_tag"){
                    $sql = "select * from article order by _Date desc";
                }else{
                   // echo "jfkdfjdfkdlfjkd".$tag_name;
                    $sql = "select * from article where Tag='$tag_name' order by _Date desc";
                }
                $result = $db->query($sql); ?>
                <div style="height:100px;margin:5px ;background-color:rgba(250, 245, 245, 0.808);" class=w3pvt-info_mail_grid_right>
                    <p><b><?php echo '共有'.$result->rowCount().'篇文章'?></b></p>
                </div>
                <?php
                if($result->rowCount()>0){
                    while($row = $result->fetch(1)){ ?>
                        <div style="height:10%;margin:5px ;background-color:rgba(250, 245, 245, 0.808);">
                            <div style="text-align:center;color: black;height:20%">
                            <a href="html-preview-markdown-to-html.php? id='article' &name= <?php  echo $row['ID'] ?>" >
                                <h4 class="title text-bl font-weight-bold"><b><?php echo $row['Title'] ?></b></h4></a><br/>

                            </div>
                            <div style="color: black; height:60%">
                                Abstract: <?php echo $row['abstract'] ?>
                                <p>这里调用PHP显示最近的文章的摘要，浏览数，评论数</p>
                            </div>
                            <div style="color: black; height:10%;bottom: 0">
                                Author： <?php echo $row["Author"] ?> Date: <?php echo $row["_Date"] ?>
                                Hits:  <?php echo $row["Hits"] ?>  tag:<?php echo $row["Tag"] ?>
                                <br/>
                            </div>
                            <div style="color: black; height:60%">
                                 <a href = "delete.php?id= <?php  echo $row['ID'] ?>">delete</a>
                                <a href = "modify.php?id= <?php  echo $row['ID'] ?>">modify</a>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    echo "<div style=\"height:100px;margin:5px ;background-color:rgba(250, 245, 245, 0.808);\"><p><b>目前还没有文章</b></p> </div>";
                }
                ?>
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