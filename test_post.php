<?php 
// https://dev2.md-hq.com/custom/myk/camera.html
// echo $_POST["imgCaptured"];
$break_by_semicolon = explode( ";", $_POST["imgCaptured"] );

$image_type = explode("/",$break_by_semicolon[0])[1]; 
$b64_string = explode(",",$break_by_semicolon[1])[1];
echo "file type is ".$image_type;
$image_data = base64_decode($b64_string);
if (file_put_contents('/image.png', $image_data)) {
    echo "saved";
} else {
    // echo "not saved ".$image_data;
};

if ( is_writable( "/" ) ){
    echo "is wr";
} else {
    echo "not wr"; //is_writable( "/var/www/html/custom/myk" );
}
?> 