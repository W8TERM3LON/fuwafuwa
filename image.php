<?php
// <!-- DISPLAYS A RANDOM IMAGE IN /IMG FOLDER -->
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    $num = array_rand($ar);
    return $ar[$num];
}
$root = '';
$path = 'img/';
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);
$type = explode("." ,$img)[1];
if($type=="jpg") $type="jpeg";
header('Content-Type:'.$type);
readfile($root . $path . $img);
?>