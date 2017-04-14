<?php

function youtube () {
 $urlVideo = file_get_contents('https://www.youtube.com/playlist?list=PL1ijbrWIDgzXJ00WtHenQBm5qMqcMPM-n&key=AIzaSyCOBFOtpAzKbiDsBsRvfQw9O7YEYtnIHJM&part');
 $urlVideoArray = json_decode($urlVideo, true);

  $video = $urlVideoArray['video'];
  for($i = 0; $i < count($video); $i++) {
    $videos = $urlVideoArray['video'][$i];


    echo ' <li class="svThumb ytVideo" data-videoID="'.$videos['id'].'">'.$videos['title'].'</li>
  ';

    }
}



?>
