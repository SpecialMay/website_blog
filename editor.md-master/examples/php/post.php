<?php
    header("Content-Type:text/html; charset=utf-8");
    header("Access-Control-Allow-Origin: *");

    if (isset($_POST['submit'])) {
    echo "<pre>";
   // echo htmlspecialchars($_POST["test-editormd-markdown-doc"]);
    //echo $_POST["test-editormd-markdown-doc"];
    //首先检查是否有直接用id号调用，
    //如果有文章被删除了，后面的所有的文章id-1
     //   echo "this is html\n";
    if(isset($_POST["test-editormd-html-code"])) {
        echo "<br/><br/>";
       //echo htmlspecialchars($_POST["test-editormd-html-code"]);
       echo $_POST["test-editormd-html-code"];
    }
    echo "</pre>";
}

    exit;
?>