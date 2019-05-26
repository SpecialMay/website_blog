<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Form get textarea value - Editor.md examples</title>
        <link rel="stylesheet" href="css/style2.css" />
        <link rel="stylesheet" href="../css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <div id="layout">
            <header>
                <h1>表单取值</h1>   
                <p>Form get textarea value.</p>     
            </header>
            <form method="post" action="http://localhost:8080/myblog/editor.md-master/examples/php/post.php">
                <div id="test-editormd">
                    <!-- Custom textarea name attribute <textarea style="display:none;" name="test-textarea-name"> -->
                    <textarea style="display:none;">#### Get value

每个 Editor.md 的 ID 元素下都有一个保存 Markdown 源码的 Textarea，你也可以通过设置开启另一个保存 HTML 源码的 Textarea，可以按需要获取相应的值，如下：

```html
&lt;div class="editormd" id="$id"&gt;
    &lt;textarea class="editormd-markdown-textarea" name="$id-markdown-doc"&gt;&lt;/textarea&gt;

    &lt;!-- html textarea 需要开启配置项 saveHTMLToTextarea == true --&gt;
    &lt;textarea class="editormd-html-textarea" name="$id-html-code"&gt;&lt;/textarea&gt;
&lt;/div&gt;
```

#### Example

```javascript
var testEditor = editormd("test-editormd", {
    width  : "90%",
    height : 640,
    path   : "../lib/",
    saveHTMLToTextarea : true
});

testEditor.getMarkdown();       // 获取 Markdown 源码
testEditor.getHTML();           // 获取 Textarea 保存的 HTML 源码
testEditor.getPreviewedHTML();  // 获取预览窗口里的 HTML，在开启 watch 且没有开启 saveHTMLToTextarea 时使用
```

#### Backend get form value

假设编辑器 ID 为 `test-editormd`，以 PHP 为例：

```php
<?php
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['submit'])) {
        echo "<pre>";
        echo htmlspecialchars($_POST["test-editormd-markdown-doc"]);
        echo "<br/><br/>";
        echo htmlspecialchars($_POST["test-editormd-html-code"]);
        echo "</pre>";
    }
?>
```

</textarea>
                </div>
                <div style="width:90%;margin: 10px auto;">
                    <input type="submit" name="submit" value="提交表单 Submit" style="padding: 5px;" /> 
                </div>               
            </form>
        </div>        
        <script src="js/jquery.min.js"></script>
        <script src="../editormd.js"></script>   
        <script type="text/javascript">
            $(function() {
                $.get("./test.md", function(md) {
                    var testEditor = editormd("test-editormd", {
                        width  : "90%",
                        height : 640,
                        path   : "../lib/",
                        appendMarkdown : md,
                        saveHTMLToTextarea : true
                    });
                });

                //testEditor.getMarkdown();       // 获取 Markdown 源码
                //testEditor.getHTML();           // 获取 Textarea 保存的 HTML 源码
                //testEditor.getPreviewedHTML();  // 获取预览窗口里的 HTML，在开启 watch 且没有开启 saveHTMLToTextarea 时使用
            });
        </script>
    </body>
</html>