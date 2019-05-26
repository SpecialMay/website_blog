<!DOCTYPE html><!--<!DOCTYPE> 声明不是 HTML 标签；它是指示 web 浏览器关于页面使用哪个 HTML 版本进行编写的指令。-->
<html lang="zxx"><!--lang用于选择语言，zxx 表示没有语言目录-->

<head>
	<title>Home</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--viewport移动端网页-->
	<meta charset="UTF-8" />
	<meta name="keywords" content="Blog" />	<!--告诉搜索引擎，我网页的关键字-->
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
	<link rel="stylesheet" href="../css/bootstrap.css"><!--规定当前文档与被链接文档之间的关系。-->
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /><!--规定被链接文档将被显示在什么设备上。-->
	<!-- Style-CSS -->
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body style = "bottom:0;background:url(index.jpg) no-repeat fixed;width:100%;height:100%;background-size: cover;">
	<!-- header -->
	<header>
		<!-- menu -->
		<ul id="menu"><!--ul规定无序列表-->
			<li>
				<input id="check02" type="checkbox" name="menu" />
				<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
				<ul class="submenu">
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="bbs.php">BBS</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="write_articles.php">Write articles</a></li>
                    <li><a href ="register.php">Login && Register</a></li>
                    <li><a href ="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- //menu -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div style = "bottom:0;background:url(index.jpg) no-repeat;width:100%;height:1200px;background-size: cover;" >
        <div class="container-fluid">
            <div class=" banner-text pl-lg-5 pl-sm-4 ml-lg-3">
                <h1 class=" my-md-4 my-3">DataScience2017</h1>
                <h2>our notebook and blogs</h2>
                <a href="register.php? name = 'login'" class="btn button-style mt-5">Login in </a>
            </div>
        </div>
	</div>
	<!-- //banner -->

</body>

</html>