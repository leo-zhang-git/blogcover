<?php
$rand = rand(1,3);
$url = 'https://cdn.jsdelivr.net/gh/leo-zhang-git/blogcover@1.2/background/'.strval($rand).'.jpg';
header("location:".$url);
?>