<?php
$rand = rand(1,11);
$url = 'https://cdn.jsdelivr.net/gh/leo-zhang-git/blogcover@1.2/PC/'.strval($rand).'.jpg';
header("location:".$url);
?>