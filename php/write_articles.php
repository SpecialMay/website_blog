<!DOCTYPE html>
<html lang="zxx">
<?php
//session_start();
//include('check.php');

?>
<head>
	<title>Write_articles</title>
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

<body style="background: url('../images/contact.jpg')">
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
					<li><a href= "write_articles.php">Write articles</a></li>
                    <li><a href ="login.php">Login && Register</a></li>
                    <li><a href ="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- //menu -->
	</header>
	<!-- //header -->

	<!-- contact -->
	<div class=" he-codes">
		<!-- contact content -->
		<div>
			<h3 class="title text-center text-wh font-weight-bold">write articles</h3>
						<div style="" class="w3pvt-info_mail_grid_right">
							<form action="write_md.php" method="post">
								<div style="width:80%;margin:3% 10% 2% 10% "class="form-group">
									<input type="text" name="Title" placeholder="Title" required="">
								</div>
								<div style="width:80%;margin:3% 10% 2% 10% "class="form-group">
										<input type="text" name="Author" class="form-control" placeholder="Author" required="">
									</div>
								<div style="color: snow;width:80%;margin:3% 10% 2% 10% "class="form-group">
									 <span>Choose three tags:在这里现在有的所有的tags</br></span>
									 <input  type = "radio" name = "tag" value = "概率论" >概率论
                                    <input  type = "radio" name = "tag"  value = "操作系统" >操作系统
                                    <input  type = "radio" name = "tag"  value = "算法">算法
                                    <input  type = "radio" name = "tag" value = "人工智能导论">人工智能导论
                                    <input  type = "radio" name = "tag" value = "数学基础">数学基础
                                    <input  type = "radio" name = "tag" value = "学习经验">学习经验
                                    <input  type = "radio" name = "tag" value = "其它">其它
								<br/>
<!--									<span>  if these tags is not what you want, you can Create tags!</span>-->
<!--									 <input style="color:black;"type = "text" name = "tags" class="form-control" placeholder="create new tag...">-->
                                    <span>Write abstract:</span>
                                    <textarea style="color:black;height:200px" name = "abstract" class = "from-control" placeholder="Write abstracts..."></textarea>
                                    <span style="color:aliceblue;">Write articles:</span>
<!--									<textarea style="height:800px" name="Article" placeholder="article......." required=""></textarea>-->
                                </div>
                                <button style="bottom:60px" type ="reset" class="btn">Reset</button>
                                <button type="submit" class="btn">  submit And Write Aticles</button>
							</form>
						</div>
					</div>
	</div>

</body>

</html>