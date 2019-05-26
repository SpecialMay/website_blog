<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>up_and_down</title>
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
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- Web-Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body style="background: url('../images/about.jpg') no-repeat fixed;background-size: cover">
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
            </ul>
        </li>
    </ul>
    <!-- //menu -->
</header>
<!-- //header -->

<!-- team -->
<div style="bottom:0; width: 100%;height:100%;background-size: cover; "  >
    <!-- team content -->
    <div class="team-cont text-center pt-5 pb-xl-4 pb-3">
        <h3 class="title text-center text-wh font-weight-bold">Up&&Down</h3>
    </div>
    <div style="margin:2% 8% 2% 70%;width=10%; color:white">
        <form action="bbs_index.php" method="post">
            <input type="text" placeholder="Search messages..." name="bbs_message_search">
        </form>
    </div>
    <div   style="margin:10%;width=20%; color:white">
        <form role="form">
            <div class="form-group">
                <label for="name">文件名：</label>
                <input type="text" class="form-control" id="name" placeholder="请输入名称">
            </div>
            <div class="form-group">
                <span style="display: inline-block;width:30%">
                    <label for="Author:">Author：</label>
                    <input type="text" class="form-control" id="Author" placeholder="author...">
                </span>
                <span style="display: inline-block;width:100%">
                    <label for="Author:">Abstract：</label>
                      <textarea class="form-control" id="abstract" placeholder="Abstract.. .."></textarea>
                </span>
            </div>
            <div class="form-group">
                <label for="keyword1">keyword:用于查询，选填</label>
                <div>
                    <span style="display: inline-block;width:30%"><input type="text" class="form-control" id="name" placeholder="keyword1.. .."></span>
                    <span style="display: inline-block;width:30%"><input type="text" class="form-control" id="name" placeholder="keyword1.. .."></span>
                    <span style="display: inline-block;width:30%"><input type="text" class="form-control" id="name" placeholder="keyword1.. .."></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputfile">文件输入</label>
                <input type="file" id="inputfile">
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
    </div>
   <div    class="list-group" style="margin:10%;width=20%; color:black">
           <a href="#" class="list-group-item active">
               <h4 class="list-group-item-heading">Filename:</h4>
               <p class="list-group-item-text"> Abstract: </p>
               <span style="display: inline-block;width:20%">keyword1: </span>
               <span style="display: inline-block;width:25%">keyword1: </span>
               <span style="display: inline-block;width:25%">keyword2:</span>
               <span style="display: inline-block;width:25%">keyword3:</span>
           </a>
           <a href="#" class="list-group-item">24*7 支持

           </a>
           <a href="#" class="list-group-item">免费 Window 空间托管</a>
           <a href="#" class="list-group-item">图像的数量</a>
           <a href="#" class="list-group-item">每年更新成本</a>

   </div>
</div>
<!-- //team -->

</body>

</html>