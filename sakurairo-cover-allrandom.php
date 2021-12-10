<?php
$rand = rand(0,1);
$url = "";
if($rand==0){
    $url="https://cdn.jsdelivr.net/gh/leo-zhang-git/blogcover@1.2/sakurairo-cover-pe.php";
}
else {
    $url="https://cdn.jsdelivr.net/gh/leo-zhang-git/blogcover@1.2/sakurairo-cover-pc.php";
}
header("location:".$url);
?>