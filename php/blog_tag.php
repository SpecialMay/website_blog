<?php
$tag_name = $_GET['name'];
header("Location:blog.php? name=".$tag_name);
exit();
?>

