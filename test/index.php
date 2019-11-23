<?php
    // USED TO GRAB RANDOM VIDEO
$file = "random.txt";
    // Convert the text fle into array and get text of each line in each array index
$file_arr = file($file);
    // Total number of linesin file
$num_lines = count($file_arr);
    // Getting the last array index number by subtracting 1 as the array index starts from 0
$last_arr_index = $num_lines - 1;
    // Random index number
$rand_index = rand(0, $last_arr_index);
    // random text from a line. The line will be a random number within the indexes of the array
$rand_vid = $file_arr[$rand_index]; 
    // used to delete the front portion of the url, only leaving the video ID
$vid = str_replace("https://www.youtube-nocookie.com/embed/","", $rand_vid);
    // trims out the whitespace at the end of the extracted video ID
$vid = rtrim($vid);
?>

<?php
    // BELOW IS TO GRAB TITLE
$videoid = $vid;
$apikey = 'AIzaSyDkqyXQOsh4l7zihlZI4GhI2NHUxMX-_WQ';
$json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$videoid.'&key='.$apikey.'&part=snippet');
$ytdata = json_decode($json);
?>

        <!-- TRANSPARENT IMAGE LAYER USED TO DIRECT TO AL PROFILE -->
<a href="https://anilist.co/user/W8TERM3LON/" target="_blank"><img src = "https://fuwafuwa.wtf/transparent.png" style="border: none; width: 100%; height: 100%" alt="W8TERM3LON'S AniList">

                        <!-- TAB HEADER -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=0.1">
    <title>LISTENING TO: <?php echo $ytdata->items[0]->snippet->title; ?></title>
</head>

                <!-- VIDEO LAYER (BACKGROUND) -->
<div class="video-background">
    <div class="video-foreground">
      <iframe src="<?php echo $rand_vid; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=0&loop=1 allow="autoplay" frameborder="0" allowfullscreen>"</iframe>
    </div>
  </div>
<style>
    * { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
</style>

            <!-- THANKS TO MORIMASA ON ANILIST FOR HELPING -->