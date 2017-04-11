<?php

 function arstechnica () {
  $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=new-scientist&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
  $urlArticlesArray = json_decode($urlArticles, true);

   $articles = $urlArticlesArray['articles'];
   for($i = 0; $i < count($articles); $i++) {
     $sites = $urlArticlesArray['articles'][$i];


     echo '
     <div class="list-item box">
      <!-- img -->
        <div class="img">
        <img src="'.$sites['urlToImage'].'" width="220" height="120" alt="" title=""/>
        </div>

      <!-- data -->
        <div class="block">
          <p class="date">'.date('M j, Y H:i', strtotime($sites['publishedAt'])).'</p>
          <p class="title">'.$sites['title'].'</p>
          <p class="desc">'.$sites['description'].'</p>
          <p class="theme">
          <span class="other"><a href="'.$sites['url'].' "style="color:blue;">Read more...</a></span>
          <span class="grop">Ars Technica</span>
          </p>
          <p class="like">'.$sites['author'].'</p>
        </div>

     </div>


     ';

     }
}

?>
