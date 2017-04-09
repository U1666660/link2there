<?php

  function articles() {

$urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
$urlArticlesArray = json_decode($urlArticles, true);

 $articles = $urlArticlesArray['articles'];
 for($i = 0; $i < count($articles); $i++) {
   $sites = $urlArticlesArray['articles'][$i];
   echo $sites['title'].' <img src="'.$sites['urlToImage'].'" width="80" class="img-circle" />';

}
}

?>
