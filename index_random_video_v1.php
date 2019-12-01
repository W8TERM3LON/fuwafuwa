        <!-- THIS VERSION DOES NOT PROVIDE VIDEO TITLE IN TAB!!! -->

<?php
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
?>

<a href="https://anilist.co/user/W8TERM3LON/" target="_blank"><img src = "https://fuwafuwa.wtf/transparent.png" style="border: none; width: 100%; height: 100%" alt="W8TERM3LON'S AniList">

<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $rand_vid; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=0&loop=1 allow="autoplay" frameborder="0" allowfullscreen>"</iframe>
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