
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <title>Write_articles</title>
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="../css/editormd.css" />
    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        /*.editormd-preview-theme-dark {
            color: #777;
            background:#2C2827;
        }

        .editormd-preview-theme-dark .editormd-toc-menu > .markdown-toc {
            background:#fff;
            border:none;
        }

        .editormd-preview-theme-dark .editormd-toc-menu > .markdown-toc h1{
            border-color:#ddd;
        }

        .editormd-preview-theme-dark .markdown-body h1,
        .editormd-preview-theme-dark .markdown-body h2,
        .editormd-preview-theme-dark .markdown-body hr {
            border-color: #222;
        }

        .editormd-preview-theme-dark .editormd-preview-container  blockquote {
            color: #555;
            border-color: #333;
            background: #222;
            padding: 0.5em;
        }

        .editormd-preview-theme-dark .editormd-preview-container abbr {
            background:#ff9900;
            color: #fff;
            padding: 1px 3px;
            border-radius: 3px;
        }

        .editormd-preview-theme-dark .editormd-preview-container code {
            background: #5A9600;
            color: #fff;
            border: none;
            padding: 1px 3px;
            border-radius: 3px;
        }

        .editormd-preview-theme-dark .editormd-preview-container table {
            border: none;
        }

        .editormd-preview-theme-dark .editormd-preview-container .fa-emoji {
            color: #B4BF42;
        }

        .editormd-preview-theme-dark .editormd-preview-container .katex {
            color: #FEC93F;
        }

        .editormd-preview-theme-dark [class*=editormd-logo] {
            color: #2196F3;
        }

        .editormd-preview-theme-dark .sequence-diagram text {
            fill: #fff;
        }

        .editormd-preview-theme-dark .sequence-diagram rect,
        .editormd-preview-theme-dark .sequence-diagram path {
            color:#fff;
            fill : #64D1CB;
            stroke : #64D1CB;
        }

        .editormd-preview-theme-dark .flowchart rect,
        .editormd-preview-theme-dark .flowchart path {
            stroke : #A6C6FF;
        }

        .editormd-preview-theme-dark .flowchart rect {
            fill: #A6C6FF;
        }

        .editormd-preview-theme-dark .flowchart text {
            fill: #5879B4;
        }*/
    </style>
</head>
<body>
<div id="layout">
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
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="bbs.php">BBS</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html" class="active">Contact Us</a></li>
                    <li><a href= "write_articles.php">Write articles</a></li>
                </ul>
            </li>
        </ul>
        <ul style="margin: 10px 0 0 18px;">
            <li>Enable HTML tags decode</li>
            <li>Enable TeX, Flowchart, Sequence Diagram, Emoji, FontAwesome, Task lists</li>
            <li>Enable Image upload</li>
            <li>Enable [TOCM], Search Replace, Code fold</li>
        </ul>
    </header>
    <div>
        <h3 class="title text-center text-wh font-weight-bold">write articles</h3>
        <div style="" class="w3pvt-info_mail_grid_right">
            <form action="write_articles_publish.php" method="post">
                <div style="width:80%;margin:3% 10% 2% 10% "class="form-group">
                    <input type="text" name="Title" placeholder="Title" required="">
                </div>
                <div style="width:80%;margin:3% 10% 2% 10% "class="form-group">
                    <input type="text" name="Author" class="form-control" placeholder="Author" required="">
                </div>
                <div style="color: snow;width:80%;margin:3% 10% 2% 10% "class="form-group">
                    <span>Choose three tags:在这里现在有的所有的tags</br></span>
                    <input  type = "checkbox" name = "tag1" >概率论
                    <input  type = "checkbox" name = "tag2">操作系统
                    <input  type = "checkbox" name = "tag3">算法
                    <input  type = "checkbox" name = "tag4">人工智能导论
                    <input  type = "checkbox" name = "tag5">数学基础
                    <br/>
                    <span>  if these tags is not what you want, you can Create tags!</span>
                    <input style="color:black;"type = "text" name = "tags" class="form-control" placeholder="create new tag...">
                    <span>Write abstract:</span>
                    <input style="color:black;"type = "text" name = "abstract" class = "from-control" placeholder="Write abstracts..."
                      <span style="color:aliceblue;">Write articles:</span>
                    <div>
                    <div class="btns">
        <button id="goto-line-btn">Goto line 90</button>
        <button id="show-btn">Show editor</button>
        <button id="hide-btn">Hide editor</button>
        <button id="get-md-btn">Get Markdown</button>
        <button id="get-html-btn">Get HTML</button>
        <button id="watch-btn">Watch</button>
        <button id="unwatch-btn">Unwatch</button>
        <button id="preview-btn">Preview HTML (Press Shift + ESC cancel)</button>
        <button id="fullscreen-btn">Fullscreen (Press ESC cancel)</button>
        <button id="show-toolbar-btn">Show toolbar</button>
        <button id="close-toolbar-btn">Hide toolbar</button>
        <button id="toc-menu-btn">ToC Dropdown menu</button>
        <button id="toc-default-btn">ToC default</button>
    </div>
    <div id="test-editormd"></div>
<script src="js/jquery.min.js"></script>
<script src="../editormd.js"></script>
<script type="text/javascript">
    var testEditor;

    $(function() {

            $.get('test.md', function(md){
                testEditor = editormd("test-editormd", {
                    width: "90%",
                    height: 740,
                   path : '../lib/',
                    theme : "dark",
                    previewTheme : "dark",
                  editorTheme : "pastel-on-dark",
                  markdown : md,
    //                 codeFold : true,
    //                 //syncScrolling : false,
                    saveHTMLToTextarea : true,    // 保存 HTML 到 Textarea
                     searchReplace : true,
                    //watch : false,                // 关闭实时预览
                    htmlDecode : "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启
                    //toolbar  : false,             //关闭工具栏
                    //previewCodeHighlight : false, // 关闭预览 HTML 的代码块高亮，默认开启
                    emoji : true,
                    taskList : true,
                    tocm            : true,         // Using [TOCM]
                    tex : true,                   // 开启科学公式TeX语言支持，默认关闭
                    flowChart : true,             // 开启流程图支持，默认关闭
                    sequenceDiagram : true,       // 开启时序/序列图支持，默认关闭,
                    //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
                    //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
                    //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
                    //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
                    //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
                    imageUpload : true,
                    imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                    imageUploadURL : "./php/upload.php",
                    onload : function() {
                        console.log('onload', this);
                        //this.fullscreen();
                        //this.unwatch();
                        //this.watch().fullscreen();

                        //this.setMarkdown("#PHP");
                        //this.width("100%");
                        //this.height(480);
                        //this.resize("100%", 640);
                    }
                });
            });

        $("#goto-line-btn").bind("click", function(){
            testEditor.gotoLine(90);
        });

        $("#show-btn").bind('click', function(){
            testEditor.show();
        });

        $("#hide-btn").bind('click', function(){
            testEditor.hide();
        });

        $("#get-md-btn").bind('click', function(){
            alert(testEditor.getMarkdown());
        });

        $("#get-html-btn").bind('click', function() {
            alert(testEditor.getHTML());
        });

        $("#watch-btn").bind('click', function() {
            testEditor.watch();
        });

        $("#unwatch-btn").bind('click', function() {
            testEditor.unwatch();
        });

        $("#preview-btn").bind('click', function() {
            testEditor.previewing();
        });

        $("#fullscreen-btn").bind('click', function() {
            testEditor.fullscreen();
        });

        $("#show-toolbar-btn").bind('click', function() {
            testEditor.showToolbar();
        });

        $("#close-toolbar-btn").bind('click', function() {
            testEditor.hideToolbar();
        });

        $("#toc-menu-btn").click(function(){
            testEditor.config({
                tocDropdown   : true,
                tocTitle      : "目录 Table of Contents",
            });
        });

        $("#toc-default-btn").click(function() {
            testEditor.config("tocDropdown", false);
        });
    });
</script>
                <button style="bottom:30px" type ="reset" class="btn">Reset</button>
                <button type="submit" class="btn">Submit</button>
        </div>
    </div>
</div>
</div>
</body>
</html>