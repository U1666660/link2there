<?php
  $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bloomberg&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
  $urlArticlesArray = json_decode($urlArticles, true);

   $articles = $urlArticlesArray['articles'];
   for($i = 0; $i < count($articles); $i++) {
     $sites = $urlArticlesArray['articles'][$i];


     echo '<li>
     <table>
     <tr>
     <td>'.$sites['title'].'</td>
     </tr>
     <tr>
     <td>'.$sites['description'].' '.date('M j, Y H:i', strtotime($sites['publishedAt'])).'<a href="'.$sites['url'].' "style="color:blue;"> Read more...</a></td>
     </tr>
     </table>
     </li>';
     }


?>
