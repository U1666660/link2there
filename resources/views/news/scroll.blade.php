@include('news.testnews')


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
  <link href="css/site.css" rel="stylesheet" type="text/css" />
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Live News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">


  <?php
    $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
    $urlArticlesArray = json_decode($urlArticles, true);

     $articles = $urlArticlesArray['articles'];
     for($i = 0; $i < count($articles); $i++) {
       $sites = $urlArticlesArray['articles'][$i];


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


  ?>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>

<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });


    });
</script>
</body>
