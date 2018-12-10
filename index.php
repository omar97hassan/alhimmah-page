<?php
include ("php/veryfirst.php");
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 27.02.2017.
 * Time: 20:59
 */
echo'<!DOCTYPE html>

<html lang="en">
<head>
  <title>'.$ata[$l].'</title>

  ';
include ("php/head.php");
echo"

</head>

<body>

";
include("php/first.php");
echo'



<div class="container-fluid onogore">
<div class="containeryt">
<iframe id="ytplayer" class="videoyt" src="https://www.youtube.com/embed/p0UG0Q-Rd4c?rel=0&showinfo=0&autoplay=1&controls=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>

</div>
</div>

  

<div class="container-fluid onogore jos">
<div class="container text-center">    

  <h2>'.$nudimo[$l].'</h2><br>

  <div class="row">

    <div class="col-sm-4 col-xs-12"> 
      <a href="/trips">
        <img src="img/aranzmani.png" class="img-responsive" style="width:100%" alt="Image">

        <p>'.$izleti[$l].'</p>    
      </a>
    </div>

    <div class="col-sm-4">

    <a href="/rent-a-car">
      <img src="img/rent2.jpg" class="img-responsive" style="width:100%" alt="Image">

      <p>'.$rent[$l].'</p>
    </a>

    </div>

    <div class="col-sm-4"> 

      <a href="/accomodation">
        <img src="img/homes2.jpg" class="img-responsive" style="width:100%" alt="Image">

        <p>'.$nek[$l].'</p>
      </a>    

    </div>

    

  </div>

</div>
</div><br>



';
include("php/last.php");
echo'


<script async src="https://www.youtube.com/iframe_api"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player(\'ytplayer\', {
    videoId: \'YOUR_VIDEO_ID\', // YouTube Video ID
    width: 1440,               // Player width (in px)
    height: 810,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 0,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 1,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 0,              // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 0         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
 }

 // Written by @labnol 
</script>



</body>

</html>

';


?>