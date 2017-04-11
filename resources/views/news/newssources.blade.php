<?php

function sources () {
       $urlSources = file_get_contents('https://newsapi.org/v1/sources?language=en');
       $urlSourcesArray = json_decode($urlSources, true);

        $sources = $urlSourcesArray['sources'];
        for($i =0; $i < count($sources); $i++) {
          $websites = $urlSourcesArray['sources'][$i];

          echo '<li>
          <a href="'.$websites['url'].'"><img style="height:20px; width:40px" src="'.$websites['urlsToLogos']['small'].'" ></a>
          </li>

           ';

          }


          }
?>
