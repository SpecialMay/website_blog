<?php

if (isset($_POST['submit'])) {
    $Content = $_POST["test-editormd-markdown-doc"];
    //   echo "$Content ";
    $filename = $_POST['path'];
    $myfile = fopen("$filename", "w") or exit("Unable to open file!");
    fwrite($myfile,$Content);
    //echo "$Article";
    fclose($myfile);
    //首先检查是否有直接用id号调用，
    //如果有文章被删除了，后面的所有的文章id-1
}
//echo "$id,$Title,$Author,$Date,$tag,$Article_ID,$Delete_tag,$Article,$Hits,$Remark,$abstract";
//载入aritcle 内容
header("location:blog.php");
?>