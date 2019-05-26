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
$id = $_GET['id'];
$sql = "select * from article where ID = $id";
$result = $db->query($sql);
if($result->rowCount()>0) {
    $row = $result->fetch(1);
}
$path =$row['Article'];
echo "kkkkkkkkkkkkkkkkkkkkkkkkkkk ".$path;
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <title>write_md</title>
    <link rel="stylesheet" href="../css/style2.css" />
    <link rel="stylesheet" href="../css/editormd.css" />
    <!--    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />-->
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
<body style="background: url('../images/contact.jpg')">
<div id="layout">
    <header style="color:white">
        <h1>Write with markdown!</h1>
        <p>Full example->functions:</p>
        <ul style="margin: 10px 0 0 18px;">
            <li>Enable HTML tags decode</li>
            <li>Enable TeX, Flowchart, Sequence Diagram, Emoji, FontAwesome, Task lists</li>
            <li>Enable Image upload</li>
            <li>Enable [TOCM], Search Replace, Code fold</li>
        </ul>
    </header>
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
    <form method="post" action="modify_publish.php">
        <div style="width:50%;height:5%;margin: 10px 5% auto;">
            <input style="background: cornflowerblue;margin: 10px 5% 5% ;padding: 5px;width: 20%" type="submit" name="submit" value=" Submit" />
        </div>
        <!--        <div class="editormd" id="$id">-->
        <!--            <textarea class="editormd-markdown-textarea" name="$id-markdown-doc"></textarea>-->
        <!---->
        <!--            <!-- html textarea 需要开启配置项 saveHTMLToTextarea == true -->-->
        <!--            <textarea class="editormd-html-textarea" name="$id-html-code"></textarea>-->
        <!--        </div>-->
        <div  id="test-editormd">
            <textarea placeholder="" style="display:none;"></textarea>
        </div>
        <input type = 'hidden' name = "path" value = <?php echo $path ?>>
    </form>
<script src="../editor.md-master/examples/js/jquery.min.js"></script>
<script src="../editor.md-master/editormd.js"></script>
<script type="text/javascript">
    var testEditor;

    $(function() {

        $.get("<?php echo $path ?>", function(md){
            testEditor = editormd("test-editormd", {
                width: "90%",
                height: 740,
                path : '../editor.md-master/lib/',
                appendMarkdown : md,
                theme : "dark",
                previewTheme : "dark",
                editorTheme : "pastel-on-dark",
                markdown : md,
                codeFold : true,
                //syncScrolling : false,
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
</body>
</html>