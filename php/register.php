<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Register&&login</title>
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body  style="background: url('../images/login.jpg') no-repeat fixed;background-size: cover" >
<!-- header -->
<header>
    <div style="height:30%">
    </div>
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
<div style="height:10%">
</div>
<div >
    <!-- team content -->
    <h3 class="title text-center   text-wh font-weight-bold">Dase&&ECNU</h3>
    <div style="background: backgroundcolor:;margin:10% 30% 10% 30%" class="team-cont text-center w3pvt-info_mail_grid_right">

        <div style="height:20%">  </div>
        <div style ="color:snow;margin: 5% 0% 0% 0%;width:100%;height:60% " >
        <h3 class="title  text-wh font-weight-bold">Register</h3>
        <div style="">
            <form action="register_check.php" method="post" class = "form-horizontal" role = "form">
                <div class = "form-group">
                    <label for = "name" class = "col-sm-2 control-label">Username:</label>
                   <div class="col-sm-11">
                       <input type="text" class="form-control" name = "username" placeholder="input username...">
                   </div>
                </div>
                <div class = "form-group">
                    <label for = "name" class = "col-sm-2 control-label">Mail:</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name = "mail" >
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "name" class = "col-sm-2 control-label">invite_code</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name = "invite_code" >
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "name" class = "col-sm-2 control-label">Password:</label>
                    <div class="col-sm-11">
                        <input type="password" class="form-control" name = "userpwd" >
                    </div>
                </div>
                <div class = "form-group">
                    <div class =>
                        <button type = "submit" class = "btn btn-default">Register</button>
                    </div>
                    <div class = "text-wh font-weight-bold">
                    </div>
                </div>
            </form>
        </div>

    </div>
    </div>
</div>
<!-- //copyright -->
</div>
<!-- //team -->

</body>

</html>