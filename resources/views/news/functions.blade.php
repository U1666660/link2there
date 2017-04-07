<?php

     function sources() {

       $urlSources = file_get_contents('https://newsapi.org/v1/sources?language=en');
       $urlSourcesArray = json_decode($urlSources, true);

        $sources = $urlSourcesArray['sources'];
        for($i =0; $i < count($sources); $i++) {
          $sites = $urlSourcesArray['sources'][$i];

          echo '<li><button class="thumbnail" value="value"><img src="'.$sites['urlsToLogos']['small'].'"></button></li>';

          }

  }


 ?>
