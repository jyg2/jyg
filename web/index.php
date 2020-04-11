<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
$url = "https://dao99.herokuapp.com/";
$contents = file_get_contents($url);
$contents = str_replace("</body>","<body>",$contents);
echo $contents;
?>