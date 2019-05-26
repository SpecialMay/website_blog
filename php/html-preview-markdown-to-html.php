<!DOCTYPE html>
<html lang="zh">
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
$filename = $row['Article'];
?>
    <head>
        <meta charset="utf-8" />
        <title>Markdown_article</title>
        <link rel="stylesheet" href="../css/style2.css" />
        <link rel="stylesheet" href="../css/editormd.preview.css" />
<!--        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />-->
        <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&amp;subset=latin-ext" rel="stylesheet">
        <style>            
            .editormd-html-preview {
                width: 90%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body style="background: url('../images/about.jpg') no-repeat fixed">
        <div id="layout">
            <header>
                <h1><?php echo $row['title']; ?></h1>
<!--                <p>即：非编辑情况下的HTML预览</p>-->
<!--                <p>HTML Preview(markdown to html)</p>       -->
            </header>
<!--            <div class="btns">-->
<!--                <button onclick="location.href='./html-preview-markdown-to-html-custom-toc-container.php?' ">-->
<!--                    <a href ="html-preview-markdown-to-html-custom-toc-container.php? id= 'article' &name =--><?php // echo $row['ID'] ?><!--"></a>-->
<!--                将Toc 移到容器层-->
<!--                </button>-->
<!--            </div>-->
<!--            <div>-->
<!--                <button onclick = "location.href=''"></button>-->
<!--            </div>-->

            <div id="test-editormd-view">
               <textarea style="display:none;" name="test-editormd-markdown-doc">###Hello world!</textarea>               
            </div>
            <div id="test-editormd-view2">
                <textarea id="append-test" style="display:none;">
                </textarea>
            </div>
        </div>
        <!-- <script src="js/zepto.min.js"></script>
		<script>		
			var jQuery = Zepto;  // 为了避免修改flowChart.js和sequence-diagram.js的源码，所以使用Zepto.js时想支持flowChart/sequenceDiagram就得加上这一句
		</script> -->
        <script src="../editor.md-master/examples/js/jquery.min.js"></script>
        <script src="../editor.md-master/lib/marked.min.js"></script>
        <script src="../editor.md-master/lib/prettify.min.js"></script>
        
        <script src="../editor.md-master/lib/raphael.min.js"></script>
        <script src="../editor.md-master/lib/underscore.min.js"></script>
        <script src="../editor.md-master/lib/sequence-diagram.min.js"></script>
        <script src="../editor.md-master/lib/flowchart.min.js"></script>
        <script src="../editor.md-master/lib/jquery.flowchart.min.js"></script>

        <script src="../editor.md-master/editormd.js"></script>
        <script type="text/javascript">
            $(function() {
                var testEditormdView, testEditormdView2;
                
                $.get("<?php echo $filename ?>", function(markdown) {
                    
				    testEditormdView = editormd.markdownToHTML("test-editormd-view", {
                        markdown        : markdown ,//+ "\r\n" + $("#append-test").text(),
                        //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                        htmlDecode      : "style,script,iframe",  // you can filter tags decode
                        //toc             : false,
                        tocm            : true,    // Using [TOCM]
                        //tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                        //gfm             : false,
                        //tocDropdown     : true,
                        // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                        emoji           : true,
                        taskList        : true,
                        tex             : true,  // 默认不解析
                        flowChart       : true,  // 默认不解析
                        sequenceDiagram : true,  // 默认不解析
                    });
                    
                    //console.log("返回一个 jQuery 实例 =>", testEditormdView);
                    
                    // 获取Markdown源码
                    //console.log(testEditormdView.getMarkdown());
                    
                    //alert(testEditormdView.getMarkdown());
                });
                    
                testEditormdView2 = editormd.markdownToHTML("test-editormd-view2", {
                    htmlDecode      : "style,script,iframe",  // you can filter tags decode
                    emoji           : true,
                    taskList        : true,
                    tex             : true,  // 默认不解析
                    flowChart       : true,  // 默认不解析
                    sequenceDiagram : true,  // 默认不解析
                });
            });
        </script>
    </body>
</html>