<?php 
// https://dev2.md-hq.com/custom/myk/camera.html
// echo $_POST["imgCaptured"];
$break_by_semicolon = explode( ";", $_POST["imgCaptured"] );

$image_type = explode("/",$break_by_semicolon[0])[1]; 
$b64_string = explode(",",$break_by_semicolon[1])[1];
echo "file type is ".$b64_string;
?> 