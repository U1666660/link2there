<?php

function articles () {
  $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
  $urlArticlesArray = json_decode($urlArticles, true);

   $articles = $urlArticlesArray['articles'];
   for($i = 0; $i < count($articles); $i++) {
     $sites = $urlArticlesArray['articles'][$i];

/* news-item from site.css */
     echo '<li class="news-item">
     <table cellpadding="4">
     <tr>
     <td><img src="'.$sites['urlToImage'].'" width="80" " /></td>
     <td>&nbsp;</td>
     <td>'.$sites['title'].'<a href="'.$sites['url'].'" style="color:blue;"> Read more...</a></td>
     </tr>
     </table>
     </li>';
     }
}

?>
