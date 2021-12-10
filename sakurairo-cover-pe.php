<?php
$rand = rand(1,11);
$url = 'https://cdn.jsdelivr.net/gh/leo-zhang-git/blogcover@1.2/PE/'.strval($rand).'.jpg';
header("location:".$url);
?>