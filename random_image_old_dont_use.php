<?php


$dir = "images/";
$images = scandir($dir);
$i = rand(2, sizeof($images)-1);
?>


<head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.1">
    <title><?php echo $images[$i]; ?></title>
</head>
<style>
    html, body
{
    height: 100%;
    margin:0;
    padding:0;
}

div {
    position:relative;
    height: 100%;
    width:100%;
}

div img {
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:auto;
}
</style>
<body style="margin: 0px; background: #0e0e0e;" data-gr-c-s-loaded="true">


<div><a href=""><img src="images/<?php echo $images[$i]; ?>" alt="<?php echo $images[$i]; ?>" /></div>



</body>

</html>

<?php
$type = explode("." ,$images)[$i];
if($type=="jpg") $type="jpeg";
header('Content-Type:'.$type);
readfile($dir . $images);

?>