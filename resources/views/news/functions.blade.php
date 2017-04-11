<?php


/* Articles & Logo icons */
       $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
       $urlArticlesArray = json_decode($urlArticles, true);

        $articles = $urlArticlesArray['articles'];
        for($i = 0; $i < count($articles); $i++) {
          $websites = $urlArticlesArray['articles'][$i];
          echo ' <li><a href="'.$websites['url'].'"><td><button class="thumbnail" value="value"><img src="'.$websites['urlsToLogos']['small'].'"></button></td></a>
            <a href="'.$websites['url'].'"><td>'.$websites['name'].'</td></a></li>';

          }

 ?>
