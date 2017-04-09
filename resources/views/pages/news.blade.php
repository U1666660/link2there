@extends('main')

@section('title', '| News')

@section('content')

<!-- Live News body -->
<div class="articles">

<body>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Live News</b></div>
    <div class="panel-body">
    <div class="row">
    <div class="col-xs-12">
    <ul class="livenews">

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
</div>
</div>

<script type="text/javascript">
        $(function () {
            $(".livenews").bootstrapNews({
                newsPerPage: 4,
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
</div> <!-- End Live News body -->

<br>

<div class="container">

<!-- News Start-->
  <div class="col-md-12">
    <div class="panel panel-default articles">
      <div class="panel-heading">
        <h3 class="panel-title">News</h3>
      </div> <!--  News-->

        <div class="News"> Test test test</div>
</div>
</div>
</div>










@endsection
